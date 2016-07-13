<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $fillable = ["p_libelle", "fk_id_etat", "fk_id_utilisateur"];

    protected $table = "projet";

    public function ensembles() {
    	return $this->hasMany('App\Ensemble', 'fk_id_projet');
    }

    public function users() {
    	return $this->belongsToMany('App\User', 'projet_utilisateur', 'fk_id_projet', 'fk_id_utilisateur');
    }

    public function Livrable() {
    	return $this->belongsToMany('App\Livrable', 'projet_livrable', 'fk_id_projet', 'fk_id_livrable');
    }

    public function InformationGenerale() {
    	return $this->belongsToMany('App\InformationGenerale', 'projet_information_generale', 'fk_id_projet', 'fk_id_information_generale');
    }

    public function Etat() {
        return $this->hasOne('App\Etat');
    }
}