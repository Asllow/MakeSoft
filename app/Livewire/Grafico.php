<?php

namespace App\Livewire;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;

class Grafico extends Component
{
    public int $count = 0;

    public function up(): void
    {
        $this->count++;
    }

    public function down(): void
    {
        $this->count--;
    }

    public function render(): View|Factory|Application
    {
        return view('livewire.grafico');
    }
}
