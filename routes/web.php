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
//ROUTE  GROUP PREFIX (I did not put action because the instructions says that just create route without controller and blade. Did not show some display. I just type to the terminal to see the route list I have created.)
//2.
Route::group([

    'prefix' => 'math'

], function(){
   Route::get('/addition');
   Route::get('/multiply');
   Route::get('/product');
   Route::get('/quotient');
});
//3. Create 3 pages using Route, Controller, and Views.
Route::group([

    'prefix' => 'product'

], function(){
  //My homepage is the HELLO WORLD THE POST TEST IN LABORATORY MODULE 1: ACTIVITY ("HELLO WORLD")
   Route::get('/list','ProductList@index');
   Route::get('/create','CreateController@index');
  
  });