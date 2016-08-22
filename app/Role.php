<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['ro_libelle', 'fk_id_etat'];

    protected $table = "role";

    public function etats() {
        return $this->hasOne('App\Etat');
    }

    public function users() {
        return $this->belongsToMany('App\User');
    }
}
