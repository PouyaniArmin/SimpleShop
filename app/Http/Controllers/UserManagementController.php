<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    public function index(){
        return view('dashboard.userDashboard');
    }
    public function info(){
        return view('dashboard.user.infoUser');
    }
}
