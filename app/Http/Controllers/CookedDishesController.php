<?php

namespace App\Http\Controllers;

use App\Actions\CookedDishes\CookedDishesStoreAction;
use App\Exceptions\NoProductsForThisDishException;
use App\Exceptions\NotEnoughProductInStockException;
use App\Filters\CookedDishesFilter;
use App\Http\Requests\CookedDishes\CookedDishesFilterRequest;
use App\Http\Requests\CookedDishes\CookedDishesStoreRequest;
use App\Models\CookedDishes;

class CookedDishesController extends Controller
{
    public function index(CookedDishesFilterRequest $requst)
    {
        $validated = $requst->validated();

        $filter = app()->make(CookedDishesFilter::class, ['queryParams' => array_filter($validated)]);

        $cookedDishes = CookedDishes::filter($filter)->get();

        return view('cookedDishes.index', compact('cookedDishes'));
    }

    public function store(CookedDishesStoreRequest $requst, CookedDishesStoreAction $action)
    {
        $validated = $requst->validated();

        try {
            $action->handle($validated);
        } catch (NotEnoughProductInStockException $exception) {
            return view('errors.not-enough-product-in-stock', ['error' => $exception->getMessage()]);
            
        } catch(NoProductsForThisDishException $exception){
            return view('errors.no-products', ['error' => $exception->getMessage()]);
        }

        return redirect()->back();
    }

    public function update()
    {

    }

    public function destroy()
    {
        
    }
}
