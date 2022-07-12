<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Poste extends Model 
{

    protected $table = 'poste';
    public $timestamps = true;

    public function appartement()
    {
        return $this->belongsTo('Appartement');
    }

}