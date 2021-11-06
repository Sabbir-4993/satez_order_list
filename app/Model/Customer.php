<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //Table
    protected $table = 'customers';

    //Primary Key
    public $primaryKey = 'id';

    //Timestamps
    public $timestamps = 'true';

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
        return $this->belongsTo('App\Model\Area', 'area_id');
//        return $this->hasMany(Area::class, 'id', 'area_id');
    }

//    public function order(){
//        return $this->hasMany(Order::class, 'customer_id', 'id');
//    }




}


