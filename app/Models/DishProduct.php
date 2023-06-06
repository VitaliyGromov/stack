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
}
