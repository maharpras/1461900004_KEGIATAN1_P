<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

class HomeController extends Controller
{
    public function index()
    {
        return view("home");
    }
    public function article0004()
    {
        return view("article0004");
    }
    public function contact0004()
    {
        return view("contact0004");
    }
}