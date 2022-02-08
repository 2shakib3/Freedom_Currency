<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function welcome(){
        return view('font_end.pages.home');
    }
}
