<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class EraController extends Controller
{
    public function index(): View|Factory|Application
    {
        $page = 'home';
        return view('era2d2.animation', compact('page'));
    }

    public function merito(): View|Factory|Application
    {
        $page = 'merito';
        return view('era2d2.merito', compact('page'));
    }

    public function organi(): View|Factory|Application
    {
        $page = 'organi';
        return view('era2d2.organi', compact('page'));
    }

    public function tecno(): View|Factory|Application
    {
        $page = 'tecno';
        return view('era2d2.tecno', compact('page'));
    }
}
