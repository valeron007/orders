<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarifs extends Model
{
    //
    protected $table = "tarifs";

    public function addresses()
    {
        return $this->belongsToMany('App\Adresses', 'tarif_adresses', 'tarif_id', 'address_id');
    }

}
