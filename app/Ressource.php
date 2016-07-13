<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ressource extends Model
{
    protected $fillable = ["r_libelle", "fk_id_etat"];

    protected $table = "ressource";

    public function Heure() {
    	return $this->belongsToMany('App\Heure');
    }

    public function HeureEnsemble() {
    	return $this->belongsToMany('App\HeureEnsemble');
    }

    public function Etat() {
        return $this->hasOne('App\Etat');
    }

    public function ensembles() {
        return $this->belongsToMany('App\Ensemble', 'budget_heure_ressource', 'fk_id_ressource', 'fk_id_ensemble')->withPivot('value');
    }
}