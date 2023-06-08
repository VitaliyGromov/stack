<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class TotalProducts extends Component
{
    public $sumProductQantity;

    public $avgProductQantity;

    public $minProductQuantity;

    public $maxProductQuantity;

    public $countProducts;


    public function mount()
    {
        $this->countProducts = Product::count();
        $this->sumProductQantity = Product::sum('quantity');
        $this->maxProductQuantity = Product::max('quantity');
        $this->minProductQuantity = Product::min('quantity');
        $this->avgProductQantity = round(Product::avg('quantity'), 2);
    }

    public function render()
    {
        return view('livewire.total-products');
    }
}
