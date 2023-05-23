<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class term_controller extends Controller
{
    public function term() {
        return view('/term');
    }
}