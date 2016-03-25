<?php

Route::group(['middleware' => ['web']], function () {

    /** Page routing */
    Route::get('', 'Controller@index');
    Route::get('/', 'Controller@index');
    Route::get('/info', 'Controller@info');
    Route::get('/viscoplus', 'Controller@viscoplus');

    /** Language routing */
    Route::get('lang/{lang}', 'LanguageController@switchLang');
});