<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
    public function check(){
        dd(Auth::check());
        return redirect('/login');
    }
}
