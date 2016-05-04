<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['ro_libelle', 'fk_id_etat'];

    protected $table = "role";

    public function Etat() {
        return $this->hasOne('Etat');
    }

    public function User() {
        return $this->belongsToMany('User');
    }
}
