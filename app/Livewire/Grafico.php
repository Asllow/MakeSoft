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
use Livewire\Attributes\On;

#[AllowDynamicProperties] class Grafico extends Component
{
    public string $selector;
    public array $datas;
    public array $labels;

    public function mount(string $selector): void
    {
        $this->selector = $selector;
        $this->query();
    }

    public function query(): void
    {
        $results = 30;
        switch ($this->selector) {
            case 'condutividade':
                $query1 = Condutividade::select('id')->latest()->take($results)->get();
                $query2 = Condutividade::select('valor')->latest()->take($results)->get();
                break;
            case 'temperatura':
                $query1 = Temperatura::select('id')->latest()->take($results)->get();
                $query2 = Temperatura::select('valor')->latest()->take($results)->get();
                break;
            case 'turbidez':
                $query1 = Turbidez::select('id')->latest()->take($results)->get();
                $query2 = Turbidez::select('valor')->latest()->take($results)->get();
                break;
            case 'ph':
                $query1 = PH::select('id')->latest()->take($results)->get();
                $query2 = PH::select('valor')->latest()->take($results)->get();
                break;
            default:
                $query1 = 0;
                $query2 = 0;
        }
        $i = 0;
        $j = 0;
        foreach ($query1 as $q1) {
            $this->labels[$i] = $q1->id;
            $i++;
        }
        foreach ($query2 as $q2) {
            $this->datas[$j] = $q2->valor;
            $j++;
        }
    }

    public function fetchData()
    {
        $this->query();
        $this->dispatch('post-created', data: $this->datas, labels: $this->labels);
    }


    public function render(): View|Factory|Application
    {
        return view('livewire.grafico')->layout('era2d2.grafico', [
            'selector' => $this->selector,
            'page' => 'home'
        ]);
    }
}
