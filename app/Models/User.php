<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model 
{

    protected $table = 'user';
    public $timestamps = true;
    protected $fillable = array(
        'nom', 'prenom', 
        'contact', 'email', 
        'role', 'idAppartement');

    public function factureUsers()
    {
        return $this->hasMany('App\Models\FactureUser', 'idUser');
    }

    public function appartements()
    {
        return $this->belongsTo('App\Models\Appartement');
    }

    public function poste()
    {
        return $this->hasMany('App\Models\Poste', 'auteur');
    }

}