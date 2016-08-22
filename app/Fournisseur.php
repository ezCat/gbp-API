<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    protected $fillable = ["f_libelle", "fk_id_etat"];

    protected $table = "fournisseur";

    public function commandes() {
    	return $this->belongsToMany('App\Commande');
    }

    public function etats() {
        return $this->hasOne('App\Etat');
    }
}