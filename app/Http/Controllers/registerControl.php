<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class registerControl extends Controller
{

    function Register(Request $req)
    {
        $user = new User;
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->password = Hash::make($req->input('password'));
        $user->save();
        return $user;
    }
    function Login(Request $req)
    {
        $user = User::where('email', $req->email)->first();
        if (!$user ||! Hash::check($req->password,$user->password)) {
            return ["error"=>"Email or Password is invalid"];
        }
        return $user;
    }
}
