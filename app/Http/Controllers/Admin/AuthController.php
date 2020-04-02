<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
     public function index()
    {
        return view('admin.login');
    }

     public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->remember)) {
//            return redirect('/admin');
            return redirect()->intended('/admin');
        }

        return redirect()->back();
    }


       public function logout()
    {
        Auth::logout();

        return redirect('/admin/login');
    } 



}
