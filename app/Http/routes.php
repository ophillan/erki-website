<?php

Route::group(['middleware' => ['web']], function () {

    /** Page routing */
    Route::get('', 'Controller@index');
    Route::get('/', 'Controller@index');
    Route::get('/info', 'Controller@info');
    Route::get('/vpone', 'Controller@vpone');
    Route::get('/vpgel', 'Controller@vpgel');

    /** Language routing */
    Route::get('lang/{lang}', 'LanguageController@switchLang');
});