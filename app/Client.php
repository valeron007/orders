<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nette\Http\Request;

class Client extends Model
{
    //
    protected $table = "clients";

    public function store(Request $request){

        $client = new Client();

        $client->name = 'valeron';

        $client->phone = '+79654701276';

    }

}
