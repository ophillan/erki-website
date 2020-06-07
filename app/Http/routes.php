<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web']], function () {

    /** Page routing */
    Route::get('/')->uses('PageController@landing')->name('/');
    Route::get('/info')->uses('PageController@info')->name('info');
    Route::get('/viscoplus')->uses('PageController@viscoplus')->name('viscoplus');
    Route::get('/faq')->uses('PageController@faq')->name('faq');

    /** Language routing */
    Route::get('lang/{lang}')->uses('LanguageController@switchLang')->name('lang');
});