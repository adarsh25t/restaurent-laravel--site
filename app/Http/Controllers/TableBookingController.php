<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class TableBookingController extends Controller
{
    public function index()
    {
        if(auth()->user()){
            $user_id = auth()->user()->id;
            $count = Cart::where('user_id',$user_id)->count();
        }
        else{
            $count = 0;
        }
        return view('pages.bookTable',compact('count'));
    }
}
