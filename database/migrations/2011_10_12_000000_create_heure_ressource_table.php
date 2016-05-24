<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeureRessourceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heure_ressource', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('fk_id_heure')->unsigned();
            $table->integer('fk_id_ressource')->unsigned();
            $table->integer('fk_id_etat')->unsigned()->default(1);

            $table->foreign('fk_id_heure')->references('id')->on('heure');
            $table->foreign('fk_id_ressource')->references('id')->on('ressource');
            $table->foreign('fk_id_etat')->references('id')->on('etat');
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
        Schema::drop('heure_ressource');
    }
}
