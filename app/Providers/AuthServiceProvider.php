<?php

namespace App\Providers;


use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        "App\Activity" => "App\Policies\ActivityPolicy",
        "App\Album" => "App\Policies\AlbumPolicy",
        "App\News" => "App\Policies\NewsPolicy",
        "App\Partner" => "App\Policies\PartnerPolicy",
        "App\Photo" => "App\Policies\PhotoPolicy",
        "App\Text" => "App\Policies\TextPolicy",
        "App\User" => "App\Policies\UserPolicy",
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

    }
}
