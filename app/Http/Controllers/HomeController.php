<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
      return view('front.home');
    }

    public function books()
    {
      return view('front.books');
    }

    public function book()
    {
    return view('front.book');
    }
}
