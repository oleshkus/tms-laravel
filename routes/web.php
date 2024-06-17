<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

//Route::resource('/news', NewsController::class );

Route::resource('/news', NewsController::class);
Route::get('/news/edit', [NewsController::class, 'updateview'])->name('news.updateview');
//Route::prefix('news')->group(function () {
//    Route::get('/', [NewsController::class, 'index'])->name('news.index');
//    Route::get('/create', [NewsController::class, 'create'])->name('news.create');
//    Route::post('/create', [NewsController::class, 'store'])->name('news.store');
//    Route::resource('/', NewsController::class);
//    Route::resource('/create', NewsController::class);
//});

Route::get('/contacts', function () {
    return view('contacts');
});
