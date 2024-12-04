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
}
