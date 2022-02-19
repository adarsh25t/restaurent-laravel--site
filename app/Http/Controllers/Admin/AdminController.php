<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chef;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
   
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

    public function AllFood()
    {
        $foods = Food::all();
        return view('admin.allFoods',compact('foods'));
    }

    public function addFood()
    {
        return view('admin.addFood');
    }

    public function uploadFood(Request $request)
    {
        $image = $request->image;
        $imageName = time()."-".$image->getClientOriginalExtension();
        $request->image->move("foodImage",$imageName);

        Food::create([
            "Title"=>$request->name,
            "price"=>$request->price,
            "description"=>$request->description,
            "category"=>$request->category,
            "image_path"=>$imageName
        ]);
        return redirect()->route('AddFood');
    }

    public function editFood($id)
    {
        $Food = Food::find($id);
        return view('admin.editFood',compact('Food'));
    }

    public function uploadEditFood(Request $request,$id)
    {
        $Food = Food::find($id);

        $image = $request->image;
        $imageName = time()."-".$image->getClientOriginalExtension();
        $request->image->move("foodImage",$imageName);

        $Food->update([
            "Title"=>$request->name,
            "price"=>$request->price,
            "description"=>$request->description,
            "category"=>$request->category,
            "image_path"=>$imageName
        ]);
        return redirect()->route('AllFood');
    }

    public function deleteFood($id)
    {
        $Food = Food::find($id);
        $Food->delete();
        return redirect()->route('AllFood');
    }


    public function addReservation(Request $request)
    {
        Reservation::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "phone"=>$request->phone,
            "guest"=>$request->guest,
            "date"=>$request->date,
            "time"=>$request->time,
            "message"=>$request->message,
            "user_id"=>auth()->user()->id
        ]);
        return redirect()->route('home');
    }

    public function viewReservation()
    {
        $reservations = Reservation::all();

        return view('admin.allReservations',compact('reservations'));
    }

    public function viewChef()
    {
        $chefs = Chef::all();
        return view('admin.allChef',compact('chefs'));
    }

    public function addChef()
    {
        return view('admin.addChef');
    }

    public function storeChef(Request $request)
    {
        $image = $request->image;
        $imageName = time()."-".$image->getClientOriginalExtension();
        $request->image->move('chef',$imageName);

        Chef::create([
            'name'=>$request->name,
            'speciality'=>$request->speciality,
            'image_path'=>$imageName
        ]);

        return redirect()->route('viewChef');
    }

    public function editChef($id)
    {
        $chef = Chef::find($id);
        return view('admin.editChef',compact('chef'));
    }

    public function uploadChef(Request $request, $id)
    {
        $chef = Chef::find($id);
        $image = $request->image;
        $imageName = time()."-".$image->getClientOriginalExtension();
        $request->image->move("chef",$imageName);

        $chef->update([
            "name"=>$request->name,
            "speciality"=>$request->speciality,
            "description"=>$request->description,
            "image_path"=>$imageName
        ]);

        return redirect()->route('viewChef');
    }

    public function deleteChef($id)
    {
        $chef = Chef::find($id);
        $chef->delete();
        return redirect()->route('viewChef');
    }
}
