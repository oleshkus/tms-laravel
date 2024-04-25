<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::resource('/news', NewsController::class );

Route::get('/contacts', function () {
    return view('contacts');
});

