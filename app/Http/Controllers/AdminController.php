<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function user()
    {
        $data = User::all();
        return view('admin.users', compact('data'));
    }

    public function deleteuser($id)
    {
        $data = User::findOrFail($id);
        $data->delete();

        return redirect()->back();
    }
}
