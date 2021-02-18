<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductList extends Controller
{
     public function index()
    {
    	 return view('list', [
    	 	'title'=> "Sample Product List"
    	 ]);
    }
}

