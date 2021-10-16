<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = [
        'area_name'
    ];

    public function customer(){
        return $this->hasMany('App\Model\Customer');
    }
}
