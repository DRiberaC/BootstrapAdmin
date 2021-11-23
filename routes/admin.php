<?php

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'role:Super Admin']], function () {
    Route::get('/home2', function () {
        return view('base');
    })->name('home2');
});
