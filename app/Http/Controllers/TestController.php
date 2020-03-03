<?php

namespace App\Http\Controllers;

use App\Tarifs;
use Illuminate\Http\Request;
use App\Client as client;
use App\Tarifs as tarif;
use Illuminate\Support\Facades\DB;
use App\Adress as adress;

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
//        $adres = new adress();
//        $adres->find(1)->tarifs()->orderBy('name');
//        $res = adress::find(1)->tarifs->addresses;

//        $data = DB::table('adress')
//            ->join('tarif_adress', 'tarif_adress.adress_id', '=', 'adress.id')
//            ->join('tarif', 'tarif.id', '=', 'tarif_adress.tarifs_id')
//            ->select('adress.adress as addrname', 'adress.id as addrid', 'tarif.id', 'tarif.name', )
//            ->get()->toArray();

//        $data = DB::table('tarif')
//            ->join('tarif_adress', 'tarif_adress.tarifs_id', '=', 'tarif.id')
//            ->join('adress', 'adress.id', '=', 'tarif_adress.adress_id')
//            ->select('adress.adress as addrname', 'adress.id as addrid', 'tarif.id', 'tarif.name', )
//            ->get()->toArray();
//
//
//        var_dump($data);
//        exit;
        $date = [
            '2020-02-28 02:02:00',
            '2020-02-25 02:02:00',
            '2020-02-26 02:02:00',
            '2020-02-27 02:12:00',
            '2020-03-01 02:02:00',
            '2020-03-02 02:02:00',
            '2020-03-03 02:02:00',
            '2020-02-20 02:02:00',
            '2020-02-23 02:02:00',
            '2020-02-24 02:02:00',
            '2020-02-25 02:02:00',
            '2020-03-02 19:47:33',
            '2020-03-02 19:47:30',
            '2020-03-02 19:50:33',
            '2020-03-02 20:47:33',
        ];
        $adresses = [
            1 => [
                1,2,3,4,6
            ],
            2 => [
                1,4,9
            ],
            3 => [
                5,7,8
            ]
        ];

//        var_dump($adresses[$tarifs][random_int(0, count($adresses[$tarifs]))]);

        for ($i = 0; $i < 10; $i++){
//            $id = random_int(1, 9);
//            $address = random_int(1,11);
//            $datatime = random_int(0,14);
            echo random_int(1, 9) . "\n";
            echo random_int(1,11) . "\n";
            echo $date[random_int(0,14)] . "\n";
            $tarifs = random_int(1,3);
            $index = array_rand($adresses[$tarifs], 1);
            echo "elem:" . $adresses[$tarifs][$index] . "\n";

        }

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
