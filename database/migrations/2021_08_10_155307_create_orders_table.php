<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')
                ->references('id')->on('clients')
                ->onDelete('cascade');

            $table->unsignedBigInteger('id_bateau');
            $table->foreign('id_bateau')
                ->references('id')->on('bateaus')
                ->onDelete('cascade');

            $table->string('nom_place');
            $table->string('nom_client');
            $table->string('nom_bateau');
            $table->string('type_bateau');
            $table->string('longueur_bateau');
            $table->string('tarifs');
            $table->date('dateD');
            $table->date('dateF');
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
        Schema::dropIfExists('orders');
    }
}
