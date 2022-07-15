<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tache extends Model {

	protected $table = 'tache';
	public $timestamps = true;
	protected $fillable = array('idAppartement');

	public function appartements()
	{
		return $this->belongsTo('Appartement');
	}

}