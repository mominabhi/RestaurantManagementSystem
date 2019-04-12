<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table='customers';
    public function online_orders()
    {
        return $this->hasMany('App\Online_order');
    }
}
