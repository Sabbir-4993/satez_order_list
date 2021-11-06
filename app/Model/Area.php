<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    //Table
    protected $table = 'areas';

    //Primary Key
    public $primaryKey = 'id';

    //Timestamps
    public $timestamps = 'true';

    protected $fillable = [
        'area_name'
    ];

    public function customer(){
        return $this->hasMany('App\Model\Customer');
    }
}
