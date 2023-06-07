<?php

namespace App\Http\Controllers;

use App\Filters\DishFilter;
use App\Http\Requests\Dish\DishFilterRequest;
use App\Http\Requests\Dish\DishFormRequest;
use App\Models\Dish;

class DishController extends Controller
{
    public function index(DishFilterRequest $request)
    {
        $validated = $request->validated();

        $filter = app()->make(DishFilter::class, ['queryParams' => array_filter($validated)]);

        $dishes = Dish::filter($filter)->get();

        return view('dishes.index', compact('dishes'));
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
