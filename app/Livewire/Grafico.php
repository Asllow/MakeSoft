<?php

namespace App\Livewire;

use AllowDynamicProperties;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;

#[AllowDynamicProperties] class Grafico extends Component
{
    public string $selector;

    public function mount(string $selector): void
    {
        $this->selector = $selector;
    }

    public function render(): View|Factory|Application
    {
        return view('livewire.grafico', [
            'selector' => $this->selector,
        ]);
    }
}
