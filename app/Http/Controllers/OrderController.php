<?php

namespace App\Http\Controllers;

use App\Actions\Order\OrderStoreAction;
use App\Http\Requests\Order\OrderStoreRequest;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('orders.index');
    }

    public function store(OrderStoreRequest $request, OrderStoreAction $action)
    {
        $validated = $request->validated();

        $action->handle($validated);

        return redirect('orders');
    }

    public function show(string $id)
    {
        
    }

    public function edit(string $id)
    {
        
    }

    public function update(Request $request, string $id)
    {
        
    }

    public function destroy(string $id)
    {
        
    }
}
