<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Poste extends Model 
{

    protected $table = 'poste';
    public $timestamps = true;
    protected $fillable = array('auteur');

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}