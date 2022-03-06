<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\user;
use Auth;

class UserDashboard extends Controller
{
    
    function  userdasboard(){
        return view('user/dashboard/view');
}
}
