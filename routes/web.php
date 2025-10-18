<?php

use App\Http\Controllers\EraController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProdutoController;
use App\Livewire\Grafico;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::controller(EraController::class)->group(function () {
    Route::get('/era2d2', 'index')->name('era.index');
    Route::get('/era2d2/organizacao-e-metodo', 'organi')->name('era.organi');
    Route::get('/era2d2/merito-cientifico', 'merito')->name('era.merito');
    Route::get('/era2d2/tecnologia-e-engenharia', 'tecno')->name('era.tecno');
    Route::get('/era2d2/store/{ano}/{valor_0?}/{valor_1?}/{valor_2?}/{valor_3?}', 'store')
        ->name('era.store')
        ->defaults('valor_0', null)
        ->defaults('valor_1', null)
        ->defaults('valor_2', null)
        ->defaults('valor_3', null);
    Route::get('/era2d2/grafico/{selector}', Grafico::class)->name('era.grafico');
});

Route::view('csat', 'makesoft.csat')->name('csat');
Route::view('persona', 'makesoft.persona')->name('persona');
Route::view('formsfeedback', 'makesoft.formsfeedback')->name('formsfeedback');
Route::view('minigame', 'makesoft.minigame')->name('minigame');
Route::view('whatsapp', 'makesoft.whatsapp')->name('whatsapp');
Route::match(['get', 'post'], '/csatform', function (Request $request) {
    $senhaCorreta = "senhanovagestao@";
    if ($request->isMethod('post') && $request->input('senha') === $senhaCorreta) {
        return redirect('https://docs.google.com/spreadsheets/d/1Y517ttiOSKXoP7S7crYGkC4L5l-FYQEDKpV9N3wnNLI/edit?resourcekey=&gid=1694954692#gid=1694954692');
    }
    return view('makesoft.csatform', ['erro' => $request->isMethod('post') ? 'Senha incorreta. Tente novamente.' : null]);
});
Route::match(['get', 'post'], '/producao', function (Request $request) {
    $senhaCorreta = '@producao0404';
    if ($request->isMethod('post') && $request->input('senha') === $senhaCorreta) {
        return view('makesoft.producao'); // exibe direto se a senha estiver certa
    }
    $erro = $request->isMethod('post') ? 'Senha incorreta. Tente novamente.' : null;
    return view('makesoft.senha-producao', ['erro' => $erro]);
});
Route::match(['get', 'post'], '/pinturas', function (Request $request) {
    $senhaCorreta = '@pinturas0404';
    if ($request->isMethod('post') && $request->input('senha') === $senhaCorreta) {
        return view('makesoft.pinturas'); // exibe direto se a senha estiver certa
    }
    $erro = $request->isMethod('post') ? 'Senha incorreta. Tente novamente.' : null;
    return view('makesoft.senha-pintura', ['erro' => $erro]);
});

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/projetos', [PageController::class, 'projetos'])->name('projetos.index');
Route::get('/catalogo/3d', [PageController::class, 'catalogo3d'])->name('catalogo.3d');
Route::get('/catalogo/corte', [PageController::class, 'catalogoCorte'])->name('catalogo.corte');
Route::get('/quemsomos', [PageController::class, 'about'])->name('about');
Route::get('/cartaocnpj', [PageController::class, 'cartaocnpj'])->name('cartaocnpj');
Route::get('/pix/{id}', [PageController::class, 'pix'])->name('makesoft.pix')->defaults('id', 'original');
Route::get('/catalogo', [ProdutoController::class, 'index'])->name('catalogo');
Route::get('/produto/{id}', [ProdutoController::class, 'show'])->name('produto.show');
