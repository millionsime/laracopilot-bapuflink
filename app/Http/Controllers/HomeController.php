<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function product()
    {
        return view('product');
    }

    public function manufacturing()
    {
        return view('manufacturing');
    }

    public function sustainability()
    {
        return view('sustainability');
    }

    public function contact()
    {
        return view('contact');
    }
}