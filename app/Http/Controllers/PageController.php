<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('makesoft.home');
    }

    public function projetos()
    {
        return view('makesoft.projetos');
    }

    public function catalogo3d()
    {
        return view('makesoft.catalogo');
    }

    public function catalogoCorte()
    {
        return view('makesoft.catalogocorte');
    }

    public function about()
    {
        return view('makesoft.about');
    }

    public function cartaocnpj()
    {
        return view('makesoft.cartaocnpj');
    }

    public function pix($id = 'original')
    {
        // lógica para chave pix aqui
        return view('makesoft.pix', compact('id'));
    }
}