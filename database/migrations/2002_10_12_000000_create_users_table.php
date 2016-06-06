<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateur', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('code_AD')->unique();
            $table->string('email')->unique();

            $table->integer('fk_id_etat')->unsigned()->default(1);
            $table->integer('fk_id_role')->unsigned()->default(2);

            $table->foreign('fk_id_role')->references('id')->on('role');
            $table->foreign('fk_id_etat')->references('id')->on('etat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('utilisateur');
    }
}
