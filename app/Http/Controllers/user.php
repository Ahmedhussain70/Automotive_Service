<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class user extends Controller
{
    public function addUser (Request $request){
        DB::table("users")->insert([
            "name"=> $request->name,
            "email"=> $request->email,
            "password"=> bcrypt($request->password),
            "phone_number"=> $request->phone_number,
            "address"=> $request->address
        ]);
        return redirect()->to(route('login'));
    }

    public function logIn (Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect('/');
        }
 
        return redirect('login')->with('error', 'The provided credentials do not match our records..');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        return redirect('login');
    }

}
