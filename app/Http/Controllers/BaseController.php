<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function aboutMe()
    {
        return view('about-me');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function blog()
    {
        return view('blog');
    }

    public function post()
    {
        return view('post');
    }

    public function contact()
    {
        return view('contact');
    }
}
