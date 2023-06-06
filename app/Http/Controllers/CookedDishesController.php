<?php

namespace App\Http\Controllers;

use App\Actions\CookedDishes\CookedDishesStoreAction;
use App\Exceptions\NotEnoughProductInStockException;
use App\Http\Requests\CookedDishes\CookedDishesStoreRequest;
use App\Models\Dish;

class CookedDishesController extends Controller
{
    public function index()
    {
        return view('cookedDishes.index');
    }

    public function store(CookedDishesStoreRequest $requst, CookedDishesStoreAction $action)
    {
        $validated = $requst->validated();

        try {
            $action->handle($validated);
        } catch (NotEnoughProductInStockException $exception) {
            return view('errors.not-enough-product-in-stock', ['error' => $exception->getMessage()]);
        }

        return redirect()->back();
    }
}
