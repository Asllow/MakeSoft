<?php

namespace App\Livewire;

use AllowDynamicProperties;
use App\Models\Condutividade;
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
        switch ($this->selector) {
            case 'condutividade':
                $labels = Condutividade::select('id')->latest()->take(60)->get();
                $data = Condutividade::select('valor')->latest()->take(60)->get();
                break;
            case 'temperatura':
                break;
            case 'turbidez':
                break;
            case 'ph':
                break;
        }
        return view('livewire.grafico', [
            'selector' => ucfirst($this->selector),
            'data' => $data,
            'labels' => get_object_vars($labels),
            'num' => $labels->count(),
        ]);
    }
}
