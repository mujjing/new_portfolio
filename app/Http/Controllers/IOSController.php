<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IOSController extends Controller
{
    public function iOS_jp()
    {
        return view('iOS.iOS_jp');
    }
    public function iOS_kr()
    {
        return view('iOS.iOS_kr');
    }
    public function iOS_en()
    {
        return view('iOS.iOS_en');
    }
}
