<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function show()
    {
    	return view('week3day2.home');
    }
}
