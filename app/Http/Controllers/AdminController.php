<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class AdminController extends Controller
{
    public function renderUsers()
    {
        $users = User::all();

        return view('admin.users')->with('users',$users);
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        if($user){
            $user->delete();
        }
        return back();
    }
}
