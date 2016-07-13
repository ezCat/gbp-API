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

    public function ressources() {
        return $this->belongsToMany('App\Ressource', 'budget_heure_ressource', 'fk_id_ensemble', 'fk_id_ressource')->withPivot('value');
    }

    public function projets() {
    	return $this->belongsTo('App\Projet');
    }

    public function Etat() {
        return $this->hasOne('App\Etat');
    }
}