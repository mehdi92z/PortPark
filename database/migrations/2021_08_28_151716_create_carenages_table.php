<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarenagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carenages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_debut');
            $table->date('date_fin')->nullable();
            $table->string('tarif')->nullable();
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')
                ->references('id')->on('clients')
                ->onDelete('cascade');
            $table->unsignedBigInteger('id_bateau');
            $table->foreign('id_bateau')
                ->references('id')->on('bateaus')
                ->onDelete('cascade');
            $table->string('etat');

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
        Schema::dropIfExists('carenages');
    }
}
