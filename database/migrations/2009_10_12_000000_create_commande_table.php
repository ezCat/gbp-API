<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commande', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('c_designation');
            $table->string('c_numero_commande')->unique();
            $table->tinyInteger('c_insatisfaction_livraison')->default(0);
            $table->tinyInteger('c_insatisfaction_qualite')->default(0);
            $table->dateTime('c_date_commande')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->float('c_prix');
            
            $table->integer('fk_id_etat')->unsigned()->default(1);
            $table->integer('fk_id_ensemble')->unsigned();
            $table->integer('fk_id_fournisseur')->unsigned();


            $table->foreign('fk_id_etat')->references('id')->on('etat');
            $table->foreign('fk_id_ensemble')->references('id')->on('ensemble');
            $table->foreign('fk_id_fournisseur')->references('id')->on('fournisseur');


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
        Schema::drop('commande');
    }
}
