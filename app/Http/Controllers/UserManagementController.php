<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    public function index(){
        $users=User::all();
        return view('dashboard.userDashboard',compact('users'));
    }
    public function info(){
        return view('dashboard.user.infoUser');
    }
}
