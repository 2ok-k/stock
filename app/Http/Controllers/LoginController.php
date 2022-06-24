<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create(){
        return view('login.create');
    }

    public function store(Request $request){

        $credentials = $request->only('email','password');
 
        //Au cas ou tout est bon
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect('/items');
        }
        //En cas d'echec
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput();

    }

    public function destroy(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect('/items');
    }
}
