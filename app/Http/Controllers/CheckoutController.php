<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function step1()
    {
    	if(Auth::check()){
    		return "shiping form";
    	}

    	return redirect('login');
    }
}
