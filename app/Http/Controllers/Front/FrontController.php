<?php

namespace App\Http\Controllers\Front;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.home');
    }

    public function shirts()
    {
        $shirts = Product::all();
        return view('front.shirts', compact('shirts'));
    }

    public function shirt()
    {
        return view('front.shirt');
    }
}
