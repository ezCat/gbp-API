<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    protected $fillable = ["f_libelle", "fk_id_etat"];

    protected $table = "fournisseur";

    public function Commande() {
    	return $this->belongsToMany('Commande');
    }

    public function Etat() {
        return $this->hasOne('Etat');
    }
}