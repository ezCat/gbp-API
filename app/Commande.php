<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $fillable = ['c_designation', "c_numero_commande", "c_date_commande", "c_prix", "c_insatisfaction_qualite", "c_insatisfaction_livraison", "fk_id_etat", "fk_id_ensemble", "fk_id_fournisseur"];

    protected $table = "commande";

    public function fournisseurs() {
    	return $this->hasOne('App\Fournisseur');
    }

    public function ensembles() {
    	return $this->hasOne('App\Ensemble');
    }

    public function etats() {
        return $this->hasOne('App\Etat');
    }

}