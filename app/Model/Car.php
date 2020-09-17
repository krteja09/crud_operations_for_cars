<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table="cars";

    public function drivers()
    {
        return $this->hasMany(Driver::class);
    }
}
