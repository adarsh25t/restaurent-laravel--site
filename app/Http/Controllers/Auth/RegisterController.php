<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            "name"=>"required",
            "phone"=>"required|min:10|numeric",
            "email"=>"email",
            "password"=>"required|min:5"
        ]);

        User::create([
            "name"=>$request->input('name'),
            "phone"=>$request->input('phone'),
            "email"=>$request->input('email'),
            "password"=>Hash::make($request->input('password'))
        ]);

        auth()->attempt($request->only("email","phone","password"));

        return redirect()->route('home');
    }
}
