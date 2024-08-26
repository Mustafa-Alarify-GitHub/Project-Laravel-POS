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
        // $validation = Validator::make($request->all(), [
        //     "name" => "required",
        //     "email" => "required",
        //     "password" => "required",
        //     "phone" => "required"
        // ]);
        User::create($request->all());
    }
    public function Login_user(Request $request)
    {
        // $validation = Validator::make($request->all(), [
        //     "name" => "required",
        //     "email" => "required",
        //     "password" => "required",
        //     "phone" => "required"
        // ]);
        $date = User::where("email", $request->email)->first();
        if ($date) {
            if (Hash::check($request->password, $date->password)) {
                return view("Home",["rank"=>$date->rank]);
            }
        }
        return to_route("login");
    }
}
