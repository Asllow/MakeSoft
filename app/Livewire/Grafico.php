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
            'datas' => array_reverse($datas_a),
            'labels' => array_reverse($label_a),
            'label' => $label_a[0],
            'label1' => $label_a[1],
            'label2' => $label_a[2],
            'label3' => $label_a[3],
            'label4' => $label_a[4],
            'data' => $datas_a[0],
            'data1' => $datas_a[1],
            'data2' => $datas_a[2],
            'data3' => $datas_a[3],
            'data4' => $datas_a[4],
        ]);
    }
}
