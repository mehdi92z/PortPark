<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function bateaus()
    {
        return $this->hasMany('App\Bateau');
    }
}
