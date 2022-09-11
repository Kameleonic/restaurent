<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use Brian2694\Toastr\Facades\Toastr;

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
        // First we find the item with given $id.
        $data = Food::find($id);

        // If the file input has a file present.
        if ($request->hasFile('image')) {
            $imagename = time() . '.' . $request->image->getClientOriginalExtension(); //NEED TO REMOVE THE OLD IMAGE FROM THE 'foodimage' DIRECTORY.
            // Move the new image into the storage directory.
            $request->image->move('foodimage', $imagename);
            $data->image = $imagename;
        }
        // Request the remaining attributes from the form
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;

        // Then finally update the menu item.
        $data->save();

        // Redirect to the food menu page with a success message.
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
    // Create a food item
    public function createMenuItem(Request $request)
    {
        // Create a new instance of the model.
        $data = new Food;

        // Request the image from the form.
        $image = $request->image;

        // Name the 'imagename' value to date + file extention.
        $imagename = time() . '.' . $image->getClientOriginalExtension();

        // Move the image to 'foodimage' folder and rename.
        $request->image->move('foodimage', $imagename);
        $data->image = $imagename;

        // Then we request the item title & price from the form.
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;

        // Finally we save the instance.
        $data->save();

        return redirect()->back();
    }

    public function viewReservations()
    {
        $data = Reservation::all();

        return view('admin.reservations', compact('data'));
    }
}
