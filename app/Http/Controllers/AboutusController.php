<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AboutusController extends Controller
{

    public function about_us(){
      $first = 'Saif-ur-';
      $last = 'Rehman';
      return view('about-us' , compact('first' , 'last'));
    }
}
