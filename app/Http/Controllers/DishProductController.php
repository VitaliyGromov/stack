<?php

namespace App\Http\Controllers;

use App\Http\Requests\DishProducts\DishProductsStoreRequest;
use App\Models\Dish;
use App\Models\DishProduct;

class DishProductController extends Controller
{
    public function store(Dish $dish, DishProductsStoreRequest $requst)
    {
        $validated = $requst->validated();

        DishProduct::create([...$validated, 'dish_id' => $dish->id]);

        return redirect()->back();
    }
}
