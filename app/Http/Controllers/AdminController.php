<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;

class AdminController extends Controller
{

    // Fetch all users for the Admin dashboard
    public function user()
    {
        $data = User::all();
        return view('admin.users', compact('data'));
    }

    // Delete the user record from database
    public function deleteuser($id)
    {
        $data = User::findOrFail($id);
        $data->delete();

        return redirect()->back();
    }

    // Show the food menu inside the admin dashboard
    public function foodMenu()
    {
        $data = Food::all();
        return view('admin.foodmenu', compact('data'));
    }


    // Upload a new food menu item inside the admin dashboard
    public function upload(Request $request)
    {
        $data = new Food;

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();

        $request->image->move('foodimage', $imagename);
        $data->image = $imagename;

        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;

        $data->save();

        return redirect()->back();
    }
}
