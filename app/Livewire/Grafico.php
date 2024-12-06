<?php

namespace App\Livewire;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;

class Grafico extends Component
{
    public function render(): View|Factory|Application
    {
        return view('livewire.grafico', [
            'id' => 0,
            'page' => 'home'
        ]);
    }
}
