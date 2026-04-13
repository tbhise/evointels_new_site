<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $baseQuery = DB::table('report_master')
            ->select('report_master.*', 'industries_master.name as industry_name')
            ->leftJoin('industries_master', 'report_master.industry_id', '=', 'industries_master.id');

        $latestReports = (clone $baseQuery)
            ->orderBy('report_master.Id', 'desc')
            ->take(4)
            ->get();

        $trendingReports = (clone $baseQuery)
            ->inRandomOrder()
            ->take(4)
            ->get();

        return view('home', compact('latestReports', 'trendingReports'));
    }
}
