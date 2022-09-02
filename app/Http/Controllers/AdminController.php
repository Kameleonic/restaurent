<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;

use function PHPUnit\Framework\isNull;

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



    /**
     * Delete a food menu entry.
     *
     * @param  $data
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteMenuItem($id)
    {
        $data = Food::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function editMenuItem($id)
    {
        $data = Food::find($id);

        return view('admin.editfood', compact('data'));
    }

    /**
     * Update the specified user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $data = Food::find($id);

        if ($request->hasFile('image')) {
            $imagename = time() . '.' . $request->image->getClientOriginalExtension();

            $request->image->move('foodimage', $imagename);
            $data->image = $imagename;
        }

        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;

        $data->save();

        return redirect('foodmenu')->with('Success', 'Menu item successfully updated.');
    }

    // Show the food menu inside the admin dashboard
    public function foodMenu()
    {
        $data = Food::all();
        return view('admin.foodmenu', compact('data'));
    }

    /**
     * Delete a food menu entry.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createMenuItem(Request $request)
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
