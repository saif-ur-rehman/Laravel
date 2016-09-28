<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact', 'WelcomeController@contact');
Route::get('about', 'AboutusController@about_us');

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
