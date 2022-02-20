<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Food;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $Foods = Food::all(); 

        if(auth()->user()){
            $user_id = auth()->user()->id;
            $count = Cart::where('user_id',$user_id)->count();
        }
        else{
            $count = 0;
        }

        return view('pages.home',compact('Foods','count'));
    }
}
