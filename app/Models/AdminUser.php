<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model {

	protected $table = 'adminUser';
	public $timestamps = true;
	protected $fillable = array('idUser');

	public function appartements()
	{
		return $this->hasMany('App\Models\Appartement', 'idAdmin');
	}

}