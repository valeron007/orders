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

        Schema::create('tarif', function (Blueprint $table) {
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
            $table->unsignedBigInteger('tarifs_id');
            $table->double('price');


            $table->foreign('client_id')
                ->references('id')
                ->on('clients')
                ->onDelete('cascade');
            $table->foreign('tarifs_id')
                ->references('id')
                ->on('tarif');
            $table->timestamps();
        });

        Schema::create('adress', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('adress', 100)->unique();
        });

        Schema::create('tarif_adress', function (Blueprint $table) {
            $table->unsignedBigInteger('tarifs_id')->unsigned();
            $table->unsignedBigInteger('adress_id')->unsigned();
            $table->foreign('tarifs_id')->references('id')->on('tarif')
                ->onDelete('cascade');
            $table->foreign('adress_id')->references('id')->on('adress')
                ->onDelete('cascade');
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
        Schema::dropIfExists('tarif');
        Schema::dropIfExists('adress');
        Schema::dropIfExists('tarif_adress');



    }
}
