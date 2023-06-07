<?php

namespace App\Http\Controllers;

use App\Http\Requests\Dish\DishFormRequest;
use App\Models\Dish;

class DishController extends Controller
{
    public function index()
    {
        return view('dishes.index');
    }

    public function store(DishFormRequest $request)
    {
        $validated = $request->validated();

        Dish::create($validated);

        return redirect('dishes');
    }

    public function show(Dish $dish)
    {  
        $products = $dish->products->toArray();

        return view('dishes.show', compact(['dish', 'products']));
    }

    public function update(Dish $dish, DishFormRequest $request)
    {
        $validated = $request->validated();

        $dish->update($validated);

        return redirect()->back();
    }

    public function destroy(Dish $dish)
    {
        $dish->delete();

        return redirect('dishes');
    }
}
