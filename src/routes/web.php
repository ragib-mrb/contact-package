<?php


Route::group(['namespace'=>'Furious\Contact\Http\Controllers'], function (){
    Route::get('contact', 'ContactController@index')->name('contact.form');
    Route::post('contact', 'ContactController@save')->name('contact');
});


