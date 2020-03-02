<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    //
    protected $table = "adress";

    public function tarifs()
    {
        return $this->belongsToMany('App\Tarifs', 'tarif_adress',  )->withPivot('tarifs_id', 'adress_id');
    }
}
