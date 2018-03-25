<?php

namespace App\Http\Controllers\Front;

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
        return view('front.shirts');
    }

    public function shirt()
    {
        return view('front.shirt');
    }
}
