<?php

namespace App\Http\Controllers;

use App\Models\Condutividade;
use App\Models\PH;
use App\Models\Temperatura;
use App\Models\Turbidez;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class EraController extends Controller
{
    public function index(): View|Factory|Application
    {
        $page = 'home';
        return view('era2d2.animation', compact('page'));
    }

    public function store(float $ph, float $turbidez, float $temperatura, float $condutividade): string
    {
        PH::create(['valor' => $ph]);
        Turbidez::create(['valor' => $turbidez]);
        Temperatura::create(['valor' => $temperatura]);
        Condutividade::create(['valor' => $condutividade]);
        return 'Registrado';
    }

    public function grafico(string $selector)
    {
        $page = 'home';
        return view('era2d2.grafico', compact('page', 'selector'));
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
