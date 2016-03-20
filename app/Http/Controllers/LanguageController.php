<?php


namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpKernel\Exception\HttpException;

class LanguageController extends Controller
{

    public function switchLang($lang)
    {
        if (array_key_exists($lang, Config::get('languages'))) {
            Session::set('applocale', $lang);
        }
        try {
            return redirect()->back();
        } catch (HttpException $httpException) {
            return view('index');
        }
    }

}
