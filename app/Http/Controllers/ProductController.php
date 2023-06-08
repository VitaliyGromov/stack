<?php

namespace App\Http\Controllers;

use App\Actions\ProductStoreAction;
use App\Filters\ProductFilter;
use App\Http\Requests\Product\ProductFilterRequest;
use App\Http\Requests\Product\ProductStoreRequest;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(ProductFilterRequest $request)
    {
        $validated = $request->validated();

        $filter = app()->make(ProductFilter::class, ['queryParams' => array_filter($validated)]);

        $products = Product::filter($filter)->get();

        return view('products.index', compact('products'));
    }

    public function store(ProductStoreRequest $request, ProductStoreAction $action)
    {
        $validated = $request->validated();

        $action->handle($validated);

        return redirect('products');
    }
}
