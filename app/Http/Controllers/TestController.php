<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client as client;

class TestController extends Controller
{
    //
    public function example(){
        $client = client::find(1);

        var_dump($client);

        return "hello";
    }
}
