<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adresses extends Model
{
    //
    protected $table = "addresses";

    public function tarifs()
    {
        return $this->belongsToMany('App\Tarifs', 'tarif_adresses', 'address_id', 'tarif_id', );
    }
}
