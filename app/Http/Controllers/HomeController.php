<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function home(){
        $pagename = "home";

        return view('home', compact('pagename'));
    }
}
