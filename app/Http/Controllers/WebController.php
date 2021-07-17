<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function web_jp()
    {
        return view('web.web_jp');
    }
    public function web_kr()
    {
        return view('web.web_kr');
    }
    public function web_en()
    {
        return view('web.web_en');
    }
}
