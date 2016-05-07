<?php

Route::group(['middleware' => ['web']], function () {

    /** Page routing */
    Route::get('', 'PageController@landing');
    Route::get('info', 'PageController@info');
    Route::get('viscoplus', 'PageController@viscoplus');

    /** Language routing */
    Route::get('lang/{lang}', 'LanguageController@switchLang');
});