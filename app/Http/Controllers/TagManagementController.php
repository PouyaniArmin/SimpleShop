<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagManagementController extends Controller
{
    public function index(){
        return view('dashboard.tagDashboard');
    }
    public function create(){
        return view('dashboard.tag.create');
    }
}
