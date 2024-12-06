<?php

namespace App\Livewire;

use AllowDynamicProperties;
use App\Models\Condutividade;
use App\Models\PH;
use App\Models\Temperatura;
use App\Models\Turbidez;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;

#[AllowDynamicProperties] class Grafico extends Component
{
    public string $selector;

    private function aaa()
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
                $labels = Temperatura::select('id')->latest()->take(60)->get();
                $i = 0;
                $label_a = [];
                foreach ($labels as $label) {
                    $label_a[$i] = $label->id;
                    $i++;
                }
                $datas = Temperatura::select('valor')->latest()->take(60)->get();
                $i = 0;
                $datas_a = [];
                foreach ($datas as $data) {
                    $datas_a[$i] = $data->valor;
                    $i++;
                }
                break;
            case 'turbidez':
                $labels = Turbidez::select('id')->latest()->take(60)->get();
                $i = 0;
                $label_a = [];
                foreach ($labels as $label) {
                    $label_a[$i] = $label->id;
                    $i++;
                }
                $datas = Turbidez::select('valor')->latest()->take(60)->get();
                $i = 0;
                $datas_a = [];
                foreach ($datas as $data) {
                    $datas_a[$i] = $data->valor;
                    $i++;
                }
                break;
            case 'ph':
                $labels = PH::select('id')->latest()->take(60)->get();
                $i = 0;
                $label_a = [];
                foreach ($labels as $label) {
                    $label_a[$i] = $label->id;
                    $i++;
                }
                $datas = PH::select('valor')->latest()->take(60)->get();
                $i = 0;
                $datas_a = [];
                foreach ($datas as $data) {
                    $datas_a[$i] = $data->valor;
                    $i++;
                }
                break;
        }
    }

    public function mount(string $selector): void
    {
        $this->selector = $selector;

    }


    public function render(): View|Factory|Application
    {

        return view('livewire.grafico')->layout('era2d2.grafico', [
            'selector' => $this->selector,
            'page' => 'home'
        ]);
    }
}
