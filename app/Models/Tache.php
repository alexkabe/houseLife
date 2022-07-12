<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tache extends Model 
{

    protected $table = 'tache';
    public $timestamps = true;

    public function appartements()
    {
        return $this->belongsTo('Appartement');
    }

}