<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
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

        $Foods = Food::all(); 
        return view('pages.menu',compact('Foods','count'));
    }

    public function addtocart(Request $request)
    {
        if(auth()->user()){
            
            Cart::create([
                "user_id"=>auth()->user()->id,
                "Food_id"=>$request->foodId,
                "quantity"=>$request->Quantity
            ]);

            return redirect()->route('menu');
        }
        else{
            return redirect()->route('login');
        }
    }
}
