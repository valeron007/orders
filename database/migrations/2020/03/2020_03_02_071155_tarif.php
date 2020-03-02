<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Tarifs as tarifs;

class Tarif extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        $names = ['optimal', 'classic', 'econom'];
        $price = [1000, 1500, 1200];
        $descriptions = [
            'При заказе на сумму 30000 руб скидка 50%',
            'При заказе на сумму от 10000 руб доставка бесплатна',
            'Доставка курьером'
        ];
        for ($i = 0; $i < 3; $i++){
            $tarif = new Tarifs();
            $tarif->name = $names[$i];
            $tarif->price = $price[$i];
            $tarif->description = $descriptions[$i];
            $tarif->save();
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::table('tarifs')->delete();;
    }
}
