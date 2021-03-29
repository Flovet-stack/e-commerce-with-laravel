<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function login(Request $req) {
        $user = User::where(['email' => $req->email])->first();

        if(!$user || !Hash::check($req->password, $user->password)){
            return "Username or password is not matched";
        } else {
            $req->session()->put('user', $user);
            return redirect('/');
        }

    }

    function register(Request $req) {
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();

        $credentials = $req->only($user->name, $user->password);

        if (Auth::attempt($credentials)) {
            $req->session()->regenerate();

            return redirect()->intended('/login');
        }
        return redirect('/login');
    }
}
