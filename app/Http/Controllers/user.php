<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\customer;

class user extends Controller
{
    function login( request $req)
    {
        $user= customer::where(['email'=>$req->email])->first();
        if (!$user || Hash::check($req->password,$user->password)) {
            return"login again";
        }
        else {
            return redirect("home");
        }
    }
}
