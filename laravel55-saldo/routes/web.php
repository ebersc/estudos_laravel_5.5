<?php

Route::group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('balance', 'BalanceController@index')->name('admin.balance');
    
    Route::get('/', 'AdminController@index')->name('admin');    
});

Route::get('/', 'Site\SiteController@index')->name('home');


Auth::routes();

