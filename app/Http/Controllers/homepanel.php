<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homepanel extends Controller
{
    public function index()
    {
    	 return view('home', [
    	 	'title'=> "Homepage"
    	 ]);
    }
}

