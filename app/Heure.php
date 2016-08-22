<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Heure extends Model
{
    protected $fillable = ["h_designation", "h_date_debut", "h_date_fin", "h_duree_mission", "fk_id_etat", "fk_id_ensemble", "fk_id_ressource"];

    protected $table = "heure";

    public function ressources() {
    	return $this->hasOne('App\Ressource');
    }

    public function ensembles() {
    	return $this->hasOne('App\Ensemble');
    }

    public function etats() {
        return $this->hasOne('App\Etat');
    }
}