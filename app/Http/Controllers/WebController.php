<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('web-pages.home');
    }

    public function about()
    {
        return view('web-pages.about');
    }

    public function facilities()
    {
        return view('web-pages.facilities');
    }

    public function work()
    {
        return view('web-pages.work');
    }

    public function contact()
    {
        return view('web-pages.contact');
    }
}
