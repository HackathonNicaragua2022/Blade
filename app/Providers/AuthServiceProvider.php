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

        //SPATIE

        // Otorgar implícitamente todos los permisos a la función "Superadministrador"
         // Esto funciona en la aplicación usando funciones relacionadas con la puerta como auth()->user->can() y @can()
        Gate::before(function ($user, $ability) {
            return $user->email == 'zelayaubeda103@gmail.com' ?? null;
        });

    }
}
