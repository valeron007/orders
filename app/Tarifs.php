<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarifs extends Model
{
    //
    protected $table = "tarif";

    public function addresses()
    {
        return $this->belongsToMany('App\Adress', 'tarif_adress')->withPivot('tarifs_id', 'adress_id');
    }

}
