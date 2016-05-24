<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformationGenerale extends Model
{
    protected $fillable = ["ig_libelle", "fk_id_etat"];

    protected $table = "information_generale";

    public function Projet() {
    	return $this->belongsToMany('App\Projet', 'projet_information_generale', 'fk_id_information_generale', 'fk_id_projet');
    }

    public function Etat() {
        return $this->hasOne('App\Etat');
    }
}