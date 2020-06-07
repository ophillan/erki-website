<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web']], function () {

    /** View routing */
    Route::get('/')->uses('PageController@landing')->name('/')->setUri('/');
    Route::get('/info')->uses('PageController@info')->name('info')->setUri('info');
    Route::get('/viscoplus')->uses('PageController@viscoplus')->name('viscoplus')->setUri('viscoplus');
    Route::get('/faq')->uses('PageController@faq')->name('faq')->setUri('faq');

    /** Language routing */
    Route::get('/lang/{lang}')->uses('LanguageController@switchLang')->name('lang')->setUri('lang/${lang}');
});
