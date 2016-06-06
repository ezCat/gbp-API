<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnsembleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ensemble', function (Blueprint $table) {
            $table->increments('id');
            $table->string('en_libelle');
            $table->float('en_budget_commande')->default(0);
            $table->longText('en_commentaire');

            $table->integer('fk_id_etat')->unsigned()->default(1);
            $table->integer('fk_id_projet')->unsigned();


            $table->foreign('fk_id_etat')->references('id')->on('etat');
            $table->foreign('fk_id_projet')->references('id')->on('projet');

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
        Schema::drop('ensemble');
    }
}
