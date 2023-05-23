<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class register_controller extends Controller
{
    public function register() {
        return view('/register');
    }
}