<?php
//
use Phplite\Route\Route;
//





Route::prefix('admin-panel', function () {
    //Guest admin routes
    Route::middleware('GuestAdmin', function () {
        //Login page
        Route::get('/', 'Admin\AuthController@index');
        Route::post('/', 'Admin\AuthController@submit');
    });

    //Auth admin routes
    Route::middleware('AuthAdmin', function () {
        // Dashboard page
        Route::get('/dashboard', 'Admin\DashboardController@index');
        //Log out
        Route::post('/logout', 'Admin\DashboardController@logout');
    });
});