<?php namespace App\Http\Controllers;

/**
*
*/
class WelcomeController extends Controller
{

  function __construct()
  {
    # code...
  }


public function contact() {
  return "Contact US Here";
  // return view('contact');
}
}
