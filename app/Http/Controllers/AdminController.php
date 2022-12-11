<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
        return view('admins.index');
    }

    function profile(){
        return view('admins.profile');
    }
    function settings(){
        return view('admins.settings');
    }
}
