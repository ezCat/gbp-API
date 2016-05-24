<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livrable extends Model
{
    protected $fillable = ["l_libelle", "fk_id_etat"];

    protected $table = "livrable";

    public function Projet() {
    	return $this->belongsToMany('App\Projet', 'projet_livrable', 'fk_id_livrable', 'fk_id_projet');
    }

    public function Etat() {
        return $this->hasOne('App\Etat');
    }
}