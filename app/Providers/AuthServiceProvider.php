<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Models\Estado' => 'App\Policies\EstadoPolicy',
        'App\Models\Municipio' => 'App\Policies\MunicipioPolicy',
        'App\Models\Cargo' => 'App\Policies\CargoPolicy',
        'App\Models\Orgao' => 'App\Policies\OrgaoPolicy'
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
