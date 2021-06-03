<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class AuthLogicController extends Controller
{
    public function login(Request $request){
        $credential = array(
            'email' => $request->input('email'),
            'password' => $request->input('password')
        );
        if(Auth::attempt($credential)){
            return "true";
        }
        else "false";
    }
}
