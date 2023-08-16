<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function signin(){

        $pagename = "signin";

        return view('signin', compact('pagename'));
    }

    public function signup(){

        $pagename = "signup";

        return view('signup', compact('pagename'));
    }

    public function watched(){
        $pagename = "watched";
        
        return view('watched', compact('pagename'));
    }

    public function wishlist(){
        $pagename = "wishlist";

        return view('wishlist', compact('pagename'));
    }
}
