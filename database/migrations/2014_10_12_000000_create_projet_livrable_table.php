<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetLivrableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projet_livrable', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('fk_id_projet')->references('id')->on('projet');
            $table->foreign('fk_id_livrable')->references('id')->on('livrable');
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
        Schema::drop('projet_livrable');
    }
}
