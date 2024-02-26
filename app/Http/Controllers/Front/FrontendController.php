<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.home.home');
    }

    public function checkout(){
        return view('frontend.checkout.checkout');
    }

    public function cart(){
        return view('frontend.cart.cart');
    }
}
