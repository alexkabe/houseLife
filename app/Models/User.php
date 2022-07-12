<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model 
{

    protected $table = 'user';
    public $timestamps = true;
    protected $fillable = array('nom', 'prenom', 'contact', 'email', 'role');

    public function factureUsers()
    {
        return $this->hasMany('FactureUser');
    }

    public function appartements()
    {
        return $this->belongsTo('Appartement');
    }

}