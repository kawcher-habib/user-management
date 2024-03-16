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
            'name' => 'required|string|min:3',
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

    public function getEditUser($id){
        $user = User::find($id);
        return view('user.edit.index',['user'=>$user]);
    }

    public function editUser(Request $request, $id){

        $request->validate([
            'name' => '',
            'email' => 'email|unique:users,email',
            'phone' => '',
        ]);
 
        $user = User::findOrFail($id); 

        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
        ]);

        return redirect()->route('alluser')->with("success", "Edit User Successfully");
    }

    public function delete($id){
        $user = User::findOrFail($id)->delete();

        return redirect()->back()->with("success", "User Deleted Successfully");
    }
}
