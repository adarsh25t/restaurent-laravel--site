<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index($id)
    {
        if(auth()->user()){
            $user_id = auth()->user()->id;
            $count = Cart::where('user_id',$user_id)->count();
        }
        else{
            $count = 0;
        }

        $data = Cart::where('user_id',$id)->join('food','carts.Food_id', '=' , 'food.id')->get();
        $data2 = Cart::select("*")->where("user_id","=",$id)->get();

        return view('pages.cart',compact('count','data',"data2"));
    }

    public function removeCart($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        return redirect()->back();
    }

    public function confirm(Request $request){

        foreach ($request->foodname as $key => $foodname) {
            
            $order = Order::create([
                "foodName"=>$foodname,
                "price"=>$request->foodprice[$key],
                "quantity"=>$request->foodquantity[$key],
                "name"=>$request->name,
                "phone"=>$request->phone,
                "address"=>$request->address
            ]);
        }

        return redirect()->back();
    }
}
