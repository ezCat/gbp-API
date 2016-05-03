<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heure', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('h_designation');
            $table->date('h_date_debut');
            $table->date('h_date_fin');
            $table->foreign('fk_id_ensemble')->references('id')->on('ensemble');
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
        Schema::drop('heure');
    }
}
