<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [['капуста', 123], ['курица', 234], ['помидоры', 143], ['огурчик', 43], ['говяжий стейк', 31]];

        foreach($products as $product)
        {
            Product::create([
                'product_name' => $product[0],
                'quantity' => $product[1],
            ]);
        }
    }
}
