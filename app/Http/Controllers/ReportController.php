<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index($industry = null)
    {

        $industries = DB::table('industries_master')->where('isActive', true)
        // ->orderBy('name')
        ->get();


        return view('reports', compact('industries'));
    }
}
