<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class PersonalAccessToken extends Model
{
    use HasFactory;
    protected $casts = [
        'abilities' => 'json',
        'last_used_at' => 'datetime',
        'expired_at' => 'datetime'
    ];

    protected $fillable = [
        'name',
        'token',
        'abilities',
        'expired_at'
    ];

    public function create(Request $request)
    {
        $user = Auth::user();

        $token_name = $request->input('token_name', 'api-token');

        $abilities = $request->input('abilities', [
            'order:create',
            'order:view',
            'WLR3:check_availability'
        ]);

        $token = $user->createToken($token_name, $abilities);

        return $this->view($user, $request);
    }
}
