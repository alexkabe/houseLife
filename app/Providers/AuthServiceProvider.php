<?php

namespace App\Providers;

use App\Models\PersonalAccessToken;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Sanctum\Sanctum;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        // Sanctum::usePersonalAccessTokenModel(PersonalAccessToken::class);
        // Sanctum::authenticateAccessTokensUsing(
        //     static function (PersonalAccessToken $accessToken, bool $is_valid) {
        //         // your logic here
        //     }
        // );
        //
    }
}
