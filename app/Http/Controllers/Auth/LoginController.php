<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

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
            
            if(auth()->user()->user_type === "0"){
                return redirect()->route('home');
            }
            elseif (auth()->user()->user_type === "1"){
                return redirect()->route('admin');
            }

        }
        else{
            return redirect()->route('login');
        }
    }
}
