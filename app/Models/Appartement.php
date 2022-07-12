<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models;
class Appartement extends Model 
{

    protected $table = 'appartement';
    public $timestamps = true;
    protected $fillable = array('nom', 'montant', 'etatSuppression');

    public function taches()
    {
        return $this->hasMany('App\Models\Tache', 'idAppartement');
    }

    public function users()
    {
        return $this->hasMany('App\Models\User', 'idAppartement');
    }

    public function factureGlobales()
    {
        return $this->hasMany('App\Models\FactureGlobale', 'idAppartement');
    }

}