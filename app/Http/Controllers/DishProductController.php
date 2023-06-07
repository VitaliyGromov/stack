<?php

namespace App\Http\Controllers;

use App\Http\Requests\DishProducts\DishProductsFormRequest;
use App\Models\Dish;
use App\Models\DishProduct;
use Illuminate\Http\Request;

class DishProductController extends Controller
{
    public function store(Dish $dish, DishProductsFormRequest $requst)
    {
        $validated = $requst->validated();

        DishProduct::create([...$validated, 'dish_id' => $dish->id]);

        return redirect()->back();
    }

    public function update(Dish $dish, DishProductsFormRequest $request)
    {
        $validated = $request->validated();

        $dishProduct = DishProduct::getDishProductByDishIdAndProductId($dish->id, $validated['product_id']);

        $dishProduct->update([...$validated]);

        return redirect()->back();
    }

    public function destroy(Dish $dish,  Request $request)
    {
        $data = $request->all();

        $dishProduct = DishProduct::getDishProductByDishIdAndProductId($dish->id, $data['product_id']);

        $dishProduct->delete();

        return redirect()->back();
    }
}
