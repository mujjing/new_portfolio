<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JavaController extends Controller
{
    public function java_jp()
    {
        return view('java.java_jp');
    }
    public function java_kr()
    {
        return view('java.java_kr');
    }
    public function java_en()
    {
        return view('java.java_en');
    }
}
