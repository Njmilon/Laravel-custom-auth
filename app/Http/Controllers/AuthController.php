<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
   
    public function login_index()
    {
        return view('auth.login');
    }

    public function login_create(Request $request)
    {
        // dd($request->all());
        $credentials = $request->except('_token');
        // dd( $credentials);
        if(Auth::attempt($credentials))
        {
            return redirect("dashboard");
        }
    }

    public function registration_index()
    {
        return view('auth.registration');
    }

    public function registration_create(Request $request)
    {
        // dd($request->all());
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);
        return redirect()->route('login.index')->with('message','User Created Successfully.');
    }
}
