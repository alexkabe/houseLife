<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FactureGlobale extends Model 
{

    protected $table = 'factureGlobale';
    public $timestamps = true;
    protected $fillable = array('mois', 'etatFacture', 'etatElectricite', 'etatEau', 'etatWifi', 'montantEau', 'montantElectricite', 'montantWifi', 'montantFacture');

    public function appartements()
    {
        return $this->belongsTo('Appartement');
    }

}