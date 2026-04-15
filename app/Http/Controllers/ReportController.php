<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index($industry = null)
    {

        $industries = DB::table('industries_master')->where('isActive', true)
            ->get();


        return view('reports.reports', compact('industries', 'industry'));
    }
    public function fetchReports(Request $request)
    {
        $industryId = $request->industry_id;

        $reports = DB::table('report_master')
            ->select('report_master.id', 'industries_master.name as industry_name', 'report_master.name', 'report_master.summary', 'report_master.base_year', 'report_master.base_year', 'report_master.forecast_year', 'report_master.slug', 'report_master.created_at')
            ->leftJoin('industries_master', 'industries_master.id', '=', 'report_master.industry_id')
            ->where('industry_id', $industryId)
            ->orderBy('report_master.id')
            ->paginate(10);
        return view('reports.reports-list', compact('reports'));
    }

    public function report_desc($industry = null)
    {

        $slug = "report/$industry";

        $report_details = DB::table('report_master')
            ->select(
                'report_master.id',
                'report_master.name as report_name',
                'report_master.base_year',
                'report_master.forecast_year',
                'report_master.created_at',
                'report_master.summary',
                'industries_master.name as industry_name',
                'industries_master.slug',
                'industries_master.initial as industry_initial',
                'sub_industries_master.name as sub_industry_name',
                'sub_industries_master.initial as sub_industry_initial'
            )
            ->leftJoin('industries_master', 'report_master.industry_id', '=', 'industries_master.id')
            ->leftJoin('sub_industries_master', 'report_master.sub_industry_id', '=', 'sub_industries_master.id')
            ->where('report_master.slug', $slug)->first();

        $report_desc = DB::table('report_desc_master')
            ->select('report_desc_master.*')
            ->where('report_id', $report_details->id)->first();

        return view('reports.report-desc', compact('report_details', 'report_desc'));
    }
}
