<?php

namespace App\Models;

use App\Traits\HasFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, HasFilter;

    public $fillable = [
        'product_name',
        'quantity'
    ];

    public static function getProductNameById(int $productId): string
    {
        $arrayOfProductFields = self::where('id', $productId)->first()->toArray();

        return $arrayOfProductFields['product_name'];
    }
}
