<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CookedDishes extends Model
{
    use HasFactory;

    public $fillable = [
        'dish_id',
        'quantity',
    ];
}
