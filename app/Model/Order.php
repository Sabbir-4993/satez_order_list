<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
      'customer_id',
      'status',
    ];

    public function customer()
    {
        return $this->hasMany('App\Model\Customer');
    }
}
