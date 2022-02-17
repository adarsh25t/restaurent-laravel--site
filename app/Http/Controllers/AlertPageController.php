<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlertPageController extends Controller
{
    public function index()
    {
        return view('pages.alert');
    }
}
