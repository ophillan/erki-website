<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App;

class Controller extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function info()
    {
        return view('info');
    }

    public function vpone()
    {
        return view('vpone');
    }

    public function vpgel()
    {
        return view('vpgel');
    }

}
