<?php

namespace App\Models;

use App\Traits\HasFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory, HasFilter;

    public $fillable = [
        'quantity',
        'order_date',
        'price',
        'product_id'
    ];
}
