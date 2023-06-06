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

    public function update()
    {
        return 'dish update request';
    }

    public function delete()
    {
        return 'delete dish requst';
    }
}
