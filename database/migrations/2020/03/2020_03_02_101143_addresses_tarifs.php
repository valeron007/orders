<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\AdressesTarifs;

class AddressesTarifs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        $addresses_tarifs = [
            [1, 1],
            [1, 2],
            [1, 3],
            [2, 1],
            [2, 4],
            [3, 5],
            [3, 7],
            [3, 8],
            [2, 9],
            [1, 6],
            [1, 4],
        ];

        $data = [];
        for ($i = 0; $i < 11; $i++){
            $data[] = [
                'tarifs_id' => $addresses_tarifs[$i][0],
                'adress_id' => $addresses_tarifs[$i][1]
            ];
        }

        DB::table('tarif_adress')->insert($data);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::table('tarif_adress')->delete();
    }
}
