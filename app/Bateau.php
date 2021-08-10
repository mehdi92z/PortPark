<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Client;

class Bateau extends Model
{
     protected $fillable = [
        'nom', 'type', 'indicatif','poid','longueur','largeur','client_id'
    ];

    public function client(){
        return $this->belongsTo(Client);
    }
}
