<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;

class TotalOrders extends Component
{
    public $countOrders;

    public $sumOrdersQuantity;

    public $maxOrdersQuantity;

    public $minOrdersQuantity;

    public $avgOrdersQuantity;

    public $maxPrice;

    public $minPrice;

    public $avgPrice;

    public $totalPrice;

    public $earliestDate;

    public $latestDate;

    public function mount()
    {
       $this->countOrders = Order::count();
       $this->sumOrdersQuantity = Order::sum('quantity');
       $this->maxOrdersQuantity = Order::max('quantity');
       $this->minOrdersQuantity = Order::min('quantity'); 
       $this->avgOrdersQuantity = round(Order::avg('quantity'), 2);

       $this->maxPrice = Order::max('price');
       $this->minPrice = Order::min('price');
       $this->avgPrice = round(Order::avg('price'), 2);
       $this->totalPrice = Order::sum('price');

       $this->earliestDate = Order::min('order_date');
       $this->latestDate = Order::max('order_date');
    }

    public function render()
    {
        return view('livewire.total-orders');
    }
}
