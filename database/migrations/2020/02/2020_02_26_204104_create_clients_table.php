<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();;
            $table->string('name')->unique();
            $table->string('phone', 12)->unique();

            $table->timestamps();
        });

        Schema::create('tarifs', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('name', 100)->unique();
            $table->string('description', 150);
            $table->float('price');

            $table->timestamps();
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('address', 100);
            $table->dateTime('date_delivery');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('tarif_id');
            $table->double('price');


            $table->foreign('client_id')
                ->references('id')
                ->on('clients')
                ->onDelete('cascade');
            $table->foreign('tarif_id')
                ->references('id')
                ->on('tarifs');
            $table->timestamps();
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('tarifs');
    }
}
