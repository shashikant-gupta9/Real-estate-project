<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function About()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function service(){
        return view('service');
    }

    public function property(){
        return view('property');
    }
}
   