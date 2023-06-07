<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Dish extends Model
{
    use HasFactory;

    public $fillable = [
        'dish_name'
    ];

    public static function getDishNameById(int $dishId): string
    {
        $arrayOfDishFields = self::where('id', $dishId)->first()->toArray();

        return $arrayOfDishFields['dish_name'];
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'dish_products', 'dish_id', 'product_id', 'id', 'id')->withPivot('quantity');
    }
}
