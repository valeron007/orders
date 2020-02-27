<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client as client;

class TestController extends Controller
{
    //
    public function example(Request $request){
//        $client = new client;
//
//        $client->name = 'andrey';
//
//        $client->phone = '+79654701273';
//
//        $result = $client->save();

//        var_dump($client);

        $res = client::where('name', '=', 'andrey')->first();


//        foreach ($res as $r){
//            var_dump($r);
//        }

        var_dump($res);



        return "hello";
    }

    private function storeClient(Request $request){

        $client = new Client();

        $client->name = 'semen';

        $client->phone = '+79654701276';

        $result = $client->save();

        return $result;
    }

    private function storeOrders(Request $request, $client_id){

    }

}
