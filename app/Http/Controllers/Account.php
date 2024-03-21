<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Account extends Controller
{
    //
    public function Index()
    {
        return view('welcome');
    }

    public function Register()
    {
        return view('register');
    }

    public function Information(Request $request)
    {
        return view('information', ['row' => $request]);
    }
}
