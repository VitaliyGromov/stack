<?php

namespace App\Models;

use App\Traits\HasFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CookedDishes extends Model
{
    use HasFactory,  HasFilter;

    public $fillable = [
        'dish_id',
        'quantity',
    ];
}
