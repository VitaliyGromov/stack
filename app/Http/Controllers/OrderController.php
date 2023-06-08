<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Filters\OrderFilter;
use App\Actions\Order\OrderStoreAction;
use App\Http\Requests\Order\OrderStoreRequest;
use App\Http\Requests\Order\OrderFilterRequest;

class OrderController extends Controller
{
    public function index(OrderFilterRequest $request)
    {
        $validated = $request->validated();

        $filter = app()->make(OrderFilter::class, ['queryParams' => array_filter($validated)]);

        $orders = Order::filter($filter)->get();

        return view('orders.index', compact('orders'));
    }

    public function store(OrderStoreRequest $request, OrderStoreAction $action)
    {
        $validated = $request->validated();

        $action->handle($validated);

        return redirect('orders');
    }

    public function destroy(string $id)
    {
        
    }
}
