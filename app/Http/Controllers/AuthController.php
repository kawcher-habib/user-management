<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function signInForm()
    {
        return view("auth.login");
    }

    public function singin(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $hashedPassword = User::where('email', $email)->value('password');
        if ($hashedPassword && Hash::check($password, $hashedPassword)) {

            if (auth()->attempt(["email" => $email, 'password' => $password])) {
                return redirect()->route('users.index')->with("message", "success");
            }
        } else {
            return redirect()->back()->withErrors([
                "email" => "Invalid credentials"
            ]);
        }
    }
}
