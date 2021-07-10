<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.index_jp');
    }

    public function index_jp()
    {
        return view('front.index_jp');
    }

    public function index_kr()
    {
        return view('front.index_kr');
    }

    public function index_en()
    {
        return view('front.index_en');
    }
}
