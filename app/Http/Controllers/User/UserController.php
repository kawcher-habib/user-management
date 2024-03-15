<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function show()
    {
        return view('user.allUser.index');
    }
    public function getUser($id){
            $user = User::find($id);
            return view('user.singleUser.profile', ['user'=>$user]);
    }
    public function getAllUser()
    {
        $getAllUser = User::orderBy('id', 'desc')->get();
        return view('user.allUser.index', ['getAllUser' => $getAllUser]);
    }

    public function getAddForm()
    {
        return view('user.create.index');
    }

    public function addNewUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string',
        ]);
 
        
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
        ]);

        return redirect()->route('alluser')->with("success", "Add New User Successfully");
    }
}
