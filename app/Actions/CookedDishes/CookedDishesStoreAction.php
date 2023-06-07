<?php
namespace App\Actions\CookedDishes;

use App\Exceptions\NoProductsForThisDishException;
use App\Models\Dish;
use App\Exceptions\NotEnoughProductInStockException;
use App\Models\CookedDishes;
use App\Models\Product;

class CookedDishesStoreAction
{
    public function handle(array $validated): void
    {
        $dish = Dish::find($validated['dish_id']);

        $products = $dish->products->toArray();

        if(sizeof($products) == 0){
            throw new NoProductsForThisDishException('Для этого блюда пока не добавили продукты');
        }

        foreach($products as $product)
        {
            if(($product['pivot']['quantity'] * $validated['quantity']) > $product['quantity']){
                throw new NotEnoughProductInStockException('Проверьте, что всех продуктов хватает для приготовления');
            }
        }

        CookedDishes::create($validated);

        foreach($products as $product){

            $updatedProduct = Product::where('id', $product['id']);

            $newProductQuantity = $product['quantity'] - ($product['pivot']['quantity'] * $validated['quantity']);

            $updatedProduct->update(['quantity' => $newProductQuantity]);
        }
    }
}
?>