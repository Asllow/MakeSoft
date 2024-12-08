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
    public false|string $chart_data;
    public false|string $chart_label;

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
                $model = PH::class;
                break;
        }
        $this->chart_label = json_encode($model::select('id')->latest()->take($results)->get()->pluck('id')->toArray());
        $this->chart_data = json_encode($model::select('valor')->latest()->take($results)->get()->pluck('valor')->toArray());
    }

    public function fetchData(): void
    {
        $this->query();
        $this->dispatch('refreshChartData', seriesData: $this->datas, categories: $this->labels);
    }


    public function render(): View|Factory|Application
    {
        return view('livewire.grafico')->layout('era2d2.grafico', [
            'selector' => $this->selector,
            'page' => 'home',
            'datas' => $this->chart_data,
            'labels' => $this->chart_label,
        ]);
    }
}
