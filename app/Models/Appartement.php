<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appartement extends Model 
{

    protected $table = 'appartement';
    public $timestamps = true;

    public function taches()
    {
        return $this->hasMany('Tache');
    }

    public function users()
    {
        return $this->hasMany('User');
    }

    public function postes()
    {
        return $this->hasMany('Poste');
    }

    public function factureGlobales()
    {
        return $this->hasMany('FactureGlobale');
    }

}