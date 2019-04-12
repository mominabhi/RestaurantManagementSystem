<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Online_order extends Model
{
    public function cuisine_list()
    {
        return $this->belongsTo('App\Cuisine_list');
    }
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
