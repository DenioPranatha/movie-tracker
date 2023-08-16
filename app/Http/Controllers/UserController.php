<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    public function signin(){

        $pagename = "signin";

        return view('signin', compact('pagename'));
    }

    public function authenticate(Request $request){
        $validate = $request->validate([
            'password' => 'required',
            'username' => 'required'
        ]);

        if(Auth::attempt($validate)){
            $request->session()->regenerate();
            return redirect('/');
        }

        return redirect()->back()->with('loginError', "LoginFailed!");
    }

    public function signup(){

        $pagename = "signup";

        return view('signup', compact('pagename'));
    }

    public function create(Request $request){
        $validate = $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required',
            'image' => 'image|file'
        ]);

        $validate['image'] = $request->file('image')->store('/image');

        $validate['password'] = bcrypt($validate['password']);

        User::create($validate);

        return redirect('/signin')->with('registerSuccess', "You successfully registered!");
    }

    public function signout(){

        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    }

    public function watched(){
        $pagename = "watched";

        return view('watched', compact('pagename'));
    }

    public function wishlist(){
        $pagename = "wishlist";

        return view('wishlist', compact('pagename'));
    }

    public function profile(){
        $pagename = "profile";

        return view('profile', compact('pagename'));
    }
}
