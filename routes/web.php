<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'TagController@index');

Route::get('/home', function () {
    return view('welcome');
    // return 'No hay elemetos';
});
