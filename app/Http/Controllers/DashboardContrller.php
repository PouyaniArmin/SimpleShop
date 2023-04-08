<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardContrller extends Controller
{
    public function index(){
        return view('dashboard.homeDashboard');
    }
}
