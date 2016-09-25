<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact', 'WelcomeController@contact');

Route::get('my/{name}', function ($name) {
    echo 'My name is ' . $name;
});

Route::get('name', function () {
    echo 'My name is Saif';
});

// CRUD methods of Routs
// Create an item
Route::post('test' , function(){
  echo "POST";
});
// Read an item
Route::get('test' , function(){
  echo "GET";
});
// Update an item
Route::put('test' , function(){
  echo "PUT";
});
// Delete an item
Route::delete('test' , function(){
  echo "DELETE";
});
