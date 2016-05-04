<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeureBudget extends Model
{
    protected $fillable = ["h_designation", "h_date_debut", "h_date_fin", "fk_id_etat", "fk_id_ensemble", "fk_id_ressource"];

    protected $table = "heure";

    public function Ressource() {
    	return $this->hasOne('Ressource');
    }

    public function Ensemble() {
    	return $this->hasOne('Ensemble');
    }

    public function Etat() {
        return $this->hasOne('Etat');
    }
}