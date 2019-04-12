<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuisine_list extends Model
{
    protected $table='cuisine_lists';

    public function online_orders()
    {
       return $this->hasMany('App\Online_order');
    }
}
