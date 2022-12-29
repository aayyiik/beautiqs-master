<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login() {
        return view('auths.login');
    }

    public function postlogin(Request $request) {

        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required',
        ]);

        
        if(!Auth::attempt($request->only('email','password'))){
            return back()->with('status','Login gagal, silahkan isi username dan password dengan benar');
        }

        return redirect('/dashboard');
    }
        

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
