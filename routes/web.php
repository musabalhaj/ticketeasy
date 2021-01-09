<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('lang/{locale}', 'HomeController@lang');

Route::group(['middleware' => ['auth']], function () {
    
    Route::get('/home', 'HomeController@index')->name('home');
    
});

Route::group(['middleware' => ['auth','Admin']], function () {
    
    Route::resource('User', 'UserController');
    
    Route::resource('Organizer', 'OrganizerController');
    
});

Route::group(['middleware' => ['auth','Organizer']], function () {
    
    Route::resource('Event', 'EventController');
    
});

Route::group(['middleware' => ['auth','User']], function () {
    
    
});