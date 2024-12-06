<?php

use App\Http\Controllers\EraController;
use App\Http\Controllers\HomeController;
use App\Livewire\Grafico;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')
        ->name('welcome');
    Route::get('/pix/{id}', 'pix')
        ->name('makesoft.pix')
        ->defaults('id', 'original');
});

Route::controller(EraController::class)->group(function () {
    Route::get('/era2d2', 'index')->name('era.index');
    Route::get('/era2d2/organizacao-e-metodo', 'organi')->name('era.organi');
    Route::get('/era2d2/merito-cientifico', 'merito')->name('era.merito');
    Route::get('/era2d2/tecnologia-e-engenharia', 'tecno')->name('era.tecno');
    Route::get('/era2d2/store/{ph}/{turbidez}/{temperatura}/{condutividade}', 'store')->name('era.store');

});

Route::view('/era2d2/grafico', 'era2d2.grafico')->name('era.grafico');

Route::view('/quemsomos', 'makesoft.directory')->name('quemsomos');
Route::view('/cartaocnpj', 'makesoft.cnpj')->name('cartaocnpj');
