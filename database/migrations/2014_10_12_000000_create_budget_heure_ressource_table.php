<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudgetHeureRessourceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budget_heure_ressource', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('fk_id_etat')->references('id')->on('etat');
            $table->foreign('fk_id_ensemble')->references('id')->on('ensemble');
            $table->foreign('fk_id_ressource')->references('id')->on('ressource');
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
        Schema::drop('budget_heure_ressource');
    }
}
