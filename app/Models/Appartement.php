<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appartement extends Model {

	protected $table = 'appartement';
	public $timestamps = true;
	protected $fillable = array('nom', 'montant', 'etatSuppression', 'idAdmin');

	public function taches()
	{
		return $this->hasMany('App\Models\Tache', 'idAppartement');
	}

	public function factureGlobales()
	{
		return $this->hasMany('App\Models\FactureGlobale', 'idAppartement');
	}

	public function adminUsers()
	{
		return $this->belongsToMany('App\Models\AdminUser', 'id');
	}

	public function tenants()
	{
		return $this->hasMany('App\Models\Tenants', 'idAppartement');
	}

}