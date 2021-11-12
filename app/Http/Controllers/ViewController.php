<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showPraktikum2()
    {
        return view('prak2web');
    }

    function showEts()
    {
        return view('ets');
    }

    function greetingsphp(Request $request)
    {
        return view ('tugasphp2');
    }

    function formphp()
    {
        return view ('tugasphp');
    }
}
