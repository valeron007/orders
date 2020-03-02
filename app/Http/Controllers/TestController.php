<?php

namespace App\Http\Controllers;

use App\Tarifs;
use Illuminate\Http\Request;
use App\Client as client;
use App\Tarifs as tarif;
use Illuminate\Support\Facades\DB;


class TestController extends Controller
{
    //
    public function example(Request $request){
//        $client = new client;
//
//        $client->name = 'semen';
//
//        $client->phone = '+79654702375';
//
//        $result = $client->save();

//        var_dump($client);

//        $res = client::where('name', '=', 'andrey')->first();



//        foreach ($res as $r){
//            var_dump($r);
//        }


//        $tar = new Tarifs();
//
//        $tar->name = "Optimum";
//        $tar->description = "При заказе на сумму 30000 руб скидка 50%";
//
//        $tar->save();

//        DB::query("TRUNCATE TABLE tarifs");

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
