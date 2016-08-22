<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BudgetEnsemble extends Model
{
    protected $fillable = ["value", "fk_id_ensemble", "fk_id_etat", "fk_id_ressource"];

    protected $table = "budget_heure_ressource";

    public function ensembles() {
    	return $this->belongsTo('App\Ensemble')->withPivot('value');
    }

    public function ressources() {
        return $this->hasOne('App\Ressource');
    }

    public function etats() {
        return $this->hasOne('App\Etat');
    }
}