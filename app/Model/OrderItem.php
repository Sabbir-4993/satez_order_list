<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'order_id',
        'product_id',
        'price',
    ];

//    public function products(){
//        return $this->belongsToMany(Product::class, 'id', 'product_id');
//    }

    public function products(){
        return $this->hasMany('App\Model\Product');
    }

    public function orders(){
        return $this->hasMany('App\Model\Order');
    }

}
