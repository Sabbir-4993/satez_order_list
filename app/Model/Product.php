<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'Product_id',
        'category_id',
        'name',
        'unit',
        'weight',
        'regular_price',
        'sale_price',
        'stock_status',
        'images',
    ];
}

