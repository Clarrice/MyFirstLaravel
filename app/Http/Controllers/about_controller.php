<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class about_controller extends Controller
{
    public function about() {
        return view('/about');
    }
}