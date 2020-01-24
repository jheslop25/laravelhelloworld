<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hellWorldController extends Controller
{

    public function show() {
        return view('about-us');
    }
    //
}
