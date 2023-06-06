<?php

namespace App\Http\Controllers;

use App\Actions\ProductStoreAction;
use App\Http\Requests\Product\ProductStoreRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index()
    {
        return view('products.index');
    }

    public function store(ProductStoreRequest $request, ProductStoreAction $action)
    {
        $validated = $request->validated();

        $action->handle($validated);

        return redirect('products');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
