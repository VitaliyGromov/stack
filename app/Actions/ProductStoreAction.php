<?php
namespace App\Actions;

use App\Models\Product;

class ProductStoreAction
{
    public function handle(array $validated): void
    {
        if($validated['quantity']){
            $quantity = $validated['quantity'];
        } else {
            $quantity = 0;
        }

        Product::create([...$validated, 'quantity' => $quantity]);
    }
}
?>