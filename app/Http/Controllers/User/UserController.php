<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $getAllUser = User::orderBy('id', 'desc')->get();
        return view('user.index', ['getAllUser' => $getAllUser]);
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('user.singleUser.profile', ['user' => $user]);
    }



    public function create()
    {
        return view('auth.registration');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string',
            'password' => 'required',
        ]);


        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => $request->input('password'),
        ]);

        return redirect()->route('users.index')->with("success", "Add New User Successfully");
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {

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

        return redirect()->route('users.index')->with("success", "Edit User Successfully");
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id)->delete();

        return redirect()->back()->with("success", "User Deleted Successfully");
    }
}
