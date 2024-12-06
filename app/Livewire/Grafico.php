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
                $i = 0;
                $label_a = [];
                foreach ($labels as $label) {
                    $label_a[$i] = $label->id;
                    $i++;
                }
                $datas = Condutividade::select('valor')->latest()->take(60)->get();
                $i = 0;
                $datas_a = [];
                foreach ($datas as $data) {
                    $datas_a[$i] = $data->valor;
                    $i++;
                }
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
            'data' => $datas_a,
            'labels' => $label_a,
        ]);
    }
}
