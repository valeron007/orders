<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Adresses;

class Addresses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        $addresses = [
            'Ленина 89',
            'Казачья 112',
            'Казачья 120',
            'Мира 3',
            'Казачья 12',
            'Казачья 11',
            'Казачья 18',
            'Кооперации 8',
            'Садовая 2',
            'Лагерная 90',
            'Советов 1',
        ];
        $data = [];
        for ($i = 0; $i < 11; $i++){
            $data[] = [
                'address' => $addresses[$i]
            ];
        }

        DB::table('addresses')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::table('addresses')->delete();
    }
}
