<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DishProduct extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $fillable = [
        'dish_id',
        'product_id',
        'quantity'
    ];

    public static function getDishProductByDishIdAndProductId(int $dishId, int $productId): DishProduct
    {
        return self::where('dish_id', $dishId)->where('product_id', $productId)->first();
    }
}
