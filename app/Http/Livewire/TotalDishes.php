<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Dish;

class TotalDishes extends Component
{
    public $totalDishes;

    public function mount()
    {
        $this->totalDishes = Dish::count();
    }

    public function render()
    {
        return view('livewire.total-dishes');
    }
}
