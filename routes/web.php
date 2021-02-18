<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//POST-TEST (laboratory-module 3) 
//1.
Route::get('/addition', function () {
    	 $sum = 5+8;
    return ("The sum of 5 and 8 is $sum.");
});
Route::get('/multiply', function () {
    	 $diff= 10-1;
    	 return("The difference of 10 and 1 is $diff."); 
});
Route::get('/product', function () {
          $prod= 3*2;
          return ("The product of 3 and 2 is $prod.");
});
Route::get('/quotient', function () {
    	  $quotient= 10/2;
    	  return ("The quotient of 10 and 2 is $quotient.");
});
Route::get('/numbers', function () {
    	$collectionA = collect([1, 2, 3, 4, 5, 6, 7, 8, 9]);
		$collectionB = $collectionA->collect();
   		return $collectionB->all(); 
});
