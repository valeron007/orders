<?php

use App\Orders;
use Illuminate\Database\Seeder;
use App\Orders as order;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
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
        $data = [];

        for ($i = 0; $i < 3000; $i++){
            $tarif = random_int(1,3);
            $index = array_rand($adresses[$tarif], 1);
            $data[] = [
                'address_id' => $adresses[$tarif][$index],
                'client_id' => random_int(1, 7),
                'date_delivery' => $date[random_int(0,14)],
                'tarifs_id' => $tarif,
                'price' => random_int(100, 900)
            ];

        }

        DB::table('orders')->insert($data);
    }
}
