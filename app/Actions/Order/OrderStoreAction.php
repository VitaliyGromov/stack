<?php
namespace App\Actions\Order;

use App\Models\Order;
use App\Models\Product;

class OrderStoreAction
{
    public function handle(array $validated): void
    {
        Order::create($validated);

        $product = Product::where('id', $validated['product_id'])->first()->toArray();

        $productQuantity = $product['quantity'];

        $newQuantity =  $productQuantity + $validated['quantity'];

        $product->update(['quantity' => $newQuantity]);
    }
}
?>