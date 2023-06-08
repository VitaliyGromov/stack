<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CookedDishes;

class TotalCookedDishes extends Component
{
    public $totalCookedDishes;

    public $maxQuantityOfCookedDishes;

    public $minQuantityOfCookedDishes;

    public $avgQuantityOfCookedDishes;

    public function mount()
    {
        $this->totalCookedDishes = CookedDishes::count();
        $this->maxQuantityOfCookedDishes = CookedDishes::max('quantity');
        $this->minQuantityOfCookedDishes = CookedDishes::min('quantity');
        $this->avgQuantityOfCookedDishes = round(CookedDishes::avg('quantity'), 2);
    }

    public function render()
    {
        return view('livewire.total-cooked-dishes');
    }
}
