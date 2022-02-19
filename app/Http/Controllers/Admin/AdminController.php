<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   
    public function index()
    {
        return view('admin.home');
    }

    public function user()
    {
        $users = User::all();
        return view('admin.allUsers',compact('users'));
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('AllUsers');
    }
}
