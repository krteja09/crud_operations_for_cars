<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $table = "drivers";
    public function car(){
        return $this->belongsTo(Car::class);
    }
}
