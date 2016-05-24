<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Heure extends Model
{
    protected $fillable = ["h_designation", "h_date_debut", "h_date_fin", "fk_id_etat", "fk_id_ensemble", "fk_id_ressource"];

    protected $table = "heure";

    public function Ressource() {
    	return $this->hasOne('App\Ressource');
    }

    public function Ensemble() {
    	return $this->hasOne('App\Ensemble');
    }

    public function Etat() {
        return $this->hasOne('App\Etat');
    }
}