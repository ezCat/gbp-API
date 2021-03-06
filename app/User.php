<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = ['nom', 'prenom', 'email', "code_AD", "fk_id_etat", 'fk_id_role', 'remember_token'];

    protected $table = "utilisateur";

    public function roles() {
    	return $this->hasOne('App\Role');
    }

    public function etats() {
        return $this->hasOne('App\Etat');
    }

    public function projets() {
    	return $this->belongsToMany('App\Projet', 'projet_utilisateur', 'fk_id_utilisateur', 'fk_id_projet');
    }
}