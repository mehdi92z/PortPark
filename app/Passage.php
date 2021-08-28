<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passage extends Model
{
    //
    public function client(){
        return $this->belongsTo('App\Client');
    }

    public function bateau(){
        return $this->belongsTo('App\Bateau','id_bateau');
    }
}
