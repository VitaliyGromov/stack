<?php

namespace App\Http\Controllers;

use App\Http\Requests\Dish\DishStoreRequest;
use App\Models\Dish;

class DishController extends Controller
{
    public function index()
    {
        return view('dishes.index');
    }

    public function store(DishStoreRequest $request)
    {
        $validated = $request->validated();

        Dish::create($validated);

        return redirect('dishes');
    }

    public function show(Dish $dish)
    {  
        $products = $dish->products->toArray();

        // dd($products);

        return view('dishes.show', compact(['dish', 'products']));
    }

    public function update()
    {
        return 'dish update request';
    }

    public function delete()
    {
        return 'delete dish requst';
    }
}
