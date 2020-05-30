<?php

use Illuminate\Support\Facades\Route;


// Admin Backend
Route::group(['prefix' => 'admin', 'namespace' => 'Controllers'], function () {
    Route::get('/', 'AdminController@index')->name('admin.home');
});
