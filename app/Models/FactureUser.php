<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FactureUser extends Model 
{

    protected $table = 'factureUser';
    public $timestamps = true;

    public function Users()
    {
        return $this->belongsTo('User');
    }

}