<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            "email"=>"required",
            "password"=>"required"
        ]);

        $fieldType = filter_var($request->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';

        if(auth()->attempt(array($fieldType => $request->email, "password" => $request->password))){
            return redirect()->route('home');
        }
        else{
            return redirect()->route('login');
        }
    }
}
