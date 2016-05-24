<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ensemble extends Model
{
    protected $fillable = ["en_libelle", "en_budget_commande", "en_commentaire", "fk_id_etat", "fk_id_projet"];

    protected $table = "ensemble";

    public function Commande() {
    	return $this->belongsToMany('App\Commande');
    }

    public function Heure() {
    	return $this->belongsToMany('App\Heure');
    }

    public function HeureBudget() {
        return $this->belongsToMany('App\HeureBudget');
    }

    public function Projet() {
    	return $this->hasOne('App\Projet');
    }

    public function Etat() {
        return $this->hasOne('App\Etat');
    }
}