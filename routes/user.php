<?php

use Illuminate\Support\Facades\Route;


// User Backend
Route::group(['prefix' => 'user', 'namespace' => 'Users\Controllers'], function () {
    Route::get('/', 'UserController@index')->name('user.home');
});
