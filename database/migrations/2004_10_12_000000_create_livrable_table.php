<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivrableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livrable', function (Blueprint $table) {
            $table->increments('id');
            $table->string('l_libelle')->unique();
            $table->integer('fk_id_etat')->unsigned()->default(1);
            
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
        Schema::drop('livrable');
    }
}
