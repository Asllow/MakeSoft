<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')
        ->name('welcome');
    Route::get('/pix/{id}', 'pix')
        ->name('makesoft.pix')
        ->defaults('id', 'original');
});

Route::view('/quemsomos', 'makesoft.directory')->name('quemsomos');
Route::view('/cartaocnpj', 'makesoft.cnpj')->name('cartaocnpj');
