<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ensemble extends Model
{
    protected $fillable = ["en_libelle", "en_budget_commande", "en_commentaire", "fk_id_etat", "fk_id_projet"];

    protected $table = "ensemble";

    public function Commande() {
    	return $this->belongsToMany('Commande');
    }

    public function Heure() {
    	return $this->belongsToMany('Heure');
    }

    public function HeureBudget() {
        return $this->belongsToMany('HeureBudget');
    }

    public function Projet() {
    	return $this->hasOne('Projet');
    }

    public function Etat() {
        return $this->hasOne('Etat');
    }
}