<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'area_id',
    ];



    // Get Area in Customer Field
    public function area()
    {
        return $this->hasOne(Area::class, 'id', 'area_id');
    }

//    public function order(){
//        return $this->hasMany(Order::class, 'customer_id', 'id');
//    }




}


