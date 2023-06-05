<?php

namespace Database\Seeders;

use App\Models\Dish;
use Illuminate\Database\Seeder;

class DishSeeder extends Seeder
{
    public function run(): void
    {
        $dishes = ['Салат Цезарь', 'Стейк из лосося', 'стейк из мяса', 'борщ', 'паста карбонара'];

        foreach($dishes as $dish)
        {
            Dish::create([
                'dish_name' => $dish,
            ]);
        }
    }
}
