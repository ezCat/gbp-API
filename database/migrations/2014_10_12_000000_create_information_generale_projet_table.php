<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformationGeneraleProjetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projet_information_generale', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('fk_id_etat')->unsigned()->default(1);
            $table->integer('fk_id_information_generale')->unsigned();
            $table->integer('fk_id_projet')->unsigned();

            $table->foreign('fk_id_projet')->references('id')->on('projet');
            $table->foreign('fk_id_information_generale')->references('id')->on('information_generale');
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
        Schema::drop('projet_information_generale');
    }
}
