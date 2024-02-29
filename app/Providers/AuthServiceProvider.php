<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('owner', function ($user) {

            //could be an array of values with if / else statement returning true or false

            //check the ending of email, returns true/false
            return substr($user->email, -12) === '@data4you.cz';
        });

        Gate::define('admin', function ($user) {

            return $user->role == 'admin';
        });
    }
}
