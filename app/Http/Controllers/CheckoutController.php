<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function step1()
    {
    	if(Auth::check()){
    		return redirect()->route('checkout.shipping');
    	}

    	return redirect('login');
    }

    public function shipping()
    {
    	return view('front.shipping-info');
    }
}
