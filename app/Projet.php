<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $fillable = ["p_libelle", "fk_id_etat", "fk_id_utilisateur"];

    protected $table = "projet";

    public function Ensemble() {
    	return $this->belongsToMany('Ensemble');
    }

    public function User() {
    	return $this->belongsToMany('User', 'projet_utilisateur', 'fk_id_utilisateur', 'fk_id_projet');
    }

    public function Livrable() {
    	return $this->belongsToMany('Livrable', 'projet_livrable', 'fk_id_livrable', 'fk_id_projet');
    }

    public function InformationGenerale() {
    	return $this->belongsToMany('InformationGenerale', 'projet_information_generale', 'fk_id_information_generale', 'fk_id_projet');
    }

    public function Etat() {
        return $this->hasOne('Etat');
    }
}