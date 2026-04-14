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


        return view('reports', compact('industries', 'industry'));
    }
    public function fetchReports(Request $request)
    {
        $industryId = $request->industry_id;

        $reports = DB::table('report_master')
            ->select('report_master.id', 'industries_master.name as industry_name', 'report_master.name', 'report_master.summary', 'report_master.base_year', 'report_master.forecast_year', 'report_master.slug', 'report_master.created_at')
            ->leftJoin('industries_master', 'industries_master.id', '=', 'report_master.industry_id')
            ->where('industry_id', $industryId)
            ->orderBy('report_master.id')
            ->paginate(10);
        return view('reports-list', compact('reports'));
    }
}
