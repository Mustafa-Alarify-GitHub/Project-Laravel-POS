<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Account_Controller extends Controller
{
    public function login()
    {
        return view("Account.login");
    }
    public function Register(Request $request)
    {
       $newUser= User::create($request->all());
        Auth()->login($newUser);
        return view("Home");
    }
    public function Login_user(Request $request)
    {
        $date = User::where("email", $request->email)->first();
        if ($date) {
            if (Hash::check($request->password, $date->password)) {
        auth()->login($date);
                return view("Home",["rank"=>$date->rank]);
            }
        }
        return to_route("login");
    }
}
