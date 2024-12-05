<?php

use App\Http\Controllers\EraController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')
        ->name('welcome');
    Route::get('/pix/{id}', 'pix')
        ->name('makesoft.pix')
        ->defaults('id', 'original');
});

Route::controller(EraController::class)->group(function () {
    Route::get('/era', 'index')->name('era.index');
    Route::get('/era/grafico/{selector}', 'grafico')->name('era.grafico');

});

Route::view('/quemsomos', 'makesoft.directory')->name('quemsomos');
Route::view('/cartaocnpj', 'makesoft.cnpj')->name('cartaocnpj');
