<?php

namespace App\Http\Controllers;

use _HumbugBox3ab8cff0fda0\Yaf\Response\Cli;
use App\Orders;
use Illuminate\Http\Request;
use App\Tarifs;
use App\Client;
use Illuminate\Support\Facades\DB;
use App\Adress as adress;
use App\Tarifs as tarif;

class OrderController extends Controller
{
    //
    public function index(Request $request){
        $tarif = new Tarifs();
        $tarifs = $tarif->all(['name', 'id'])->toArray();

        return view('orders/index', ['tarifs' => $tarifs]);
    }

    public function create(Request $request){
        $client = new Client();
        $client_form = $request->post('order');

        $client_exists = Client::where('phone', '=', $client_form['phone'])
            ->where('name', '=', $client_form['name'])
            ->first();

        if ($client_exists == null){
            $client->name = $client_form['name'];
            $client->phone = $client_form['phone'];
            $client->save();
        }else{
            $client->id = $client_exists['id'];
        }

        $order = new Orders();
        $order->address_id = $client_form['adress'];
        $order->date_delivery = $client_form['date_livery'];
        $order->client_id = $client->id;
        $order->price = $client_form['price'];

        $order->tarifs_id = $client_form['tarif'];
        $order->save();

        return json_encode(['success' => 'Заказ успешно создан']);
    }

    public function getAddresses(Request $request){
        $id = $request->post('id');

        $data = DB::table('tarif')
            ->join('tarif_adress', 'tarif_adress.tarifs_id', '=', 'tarif.id')
            ->join('adress', 'adress.id', '=', 'tarif_adress.adress_id')
            ->where('tarif.id', '=', $id)
            ->select('adress.adress', 'adress.id')
            ->get()->toArray();
        $result = [];
        foreach ($data as $d){
            $result[] = [
                  'id' => $d->id,
                   'name' => $d->adress
            ];
        }

        return json_encode($result);
    }

}
