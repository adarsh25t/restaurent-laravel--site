<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $Foods = Food::all(); 
        return view('pages.menu',["foods"=>$Foods]);
    }
}
