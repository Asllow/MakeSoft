<?php

namespace App\Livewire;

use AllowDynamicProperties;
use App\Models\Condutividade;
use App\Models\PH;
use App\Models\Temperatura2;
use App\Models\Turbidez;
use App\Models\Temperatura;
use App\Models\Umidade;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;

#[AllowDynamicProperties] class Grafico extends Component
{
    public string $selector;
    public array $chart_data;
    public array $chart_label;

    public function mount(string $selector): void
    {
        $this->selector = $selector;
        $this->updateChartData();
    }

    public function updateChartData()
    {
        $results = 30;
        switch ($this->selector) {
            case 'condutividade':
                $model = Condutividade::class;
                break;
            case 'temperatura':
                $model = Temperatura2::class;
                break;
             case 'temperatura1':
                $model = Temperatura::class;
                break;
             case 'umidade':
                $model = Umidade::class;
                break;
            case 'turbidez':
                $model = Turbidez::class;
                break;
            case 'ph':
                $model = PH::class;
                break;
            default:
                return abort(404);
        }
        $this->chart_label = array_reverse($model::select('id')->latest()->take($results)->get()->pluck('id')->toArray());
        $this->chart_data = array_reverse($model::select('valor')->latest()->take($results)->get()->pluck('valor')->toArray());
        $this->dispatch('chart-updated', $this->chart_data, $this->chart_label);
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
