<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetUtilisateurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projet_utilisateur', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('fk_id_projet')->references('id')->on('projet');
            $table->foreign('fk_id_utilisateur')->references('id')->on('utilisateur');
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
        Schema::drop('projet_utilisateur');
    }
}
