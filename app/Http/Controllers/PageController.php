<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function landing()
    {
        return view('landing');
    }

    public function info()
    {
        return view('info');
    }

    public function viscoplus()
    {
        return view('viscoplus');
    }

    public function faq()
    {
        return view('faq');
    }
}
