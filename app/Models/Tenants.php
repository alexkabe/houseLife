<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tenants extends Model {

	protected $table = 'tenants';
	public $timestamps = true;
	protected $fillable = array('type', 'idUser', 'idAppartement');

	public function appartements()
	{
		return $this->belongsToMany('App\Models\Appartement');
	}

	public function postes()
	{
		return $this->hasMany('App\Models\Poste', 'auteur');
	}

	public function factureUsers()
	{
		return $this->hasMany('App\Models\FactureUser', 'idUser');
	}

}