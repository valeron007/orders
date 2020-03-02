<?php

namespace App\Http\Controllers;

use _HumbugBox3ab8cff0fda0\Yaf\Response\Cli;
use App\Orders;
use Illuminate\Http\Request;
use App\Tarifs;
use App\Client;

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

        $client_exists = Client::where('name', '=', $client_form['name'])->first();

        if ($client_exists == null){
            $client->name = $client_form['name'];
            $client->phone = $client_form['phone'];
            $client->save();
        }else{
            $client->id = $client_exists['id'];
        }

        $order = new Orders();
        $order->address = $client_form['address'];
        $order->date_delivery = $client_form['date_livery'];
        $order->client_id = $client->id;
        $order->tarif_id = $client_form['tarif'];
        $order->save();

        exit;
        //return 'ww';
    }

}
