<?php

namespace App\Providers;

use App\Activity;
use App\Album;
use App\News;
use App\Partner;
use App\Photo;
use App\Text;
use App\User;

use App\Policies\ActivityPolicy;
use App\Policies\AlbumPolicy;
use App\Policies\NewsPolicy;
use App\Policies\PartnerPolicy;
use App\Policies\PhotoPolicy;
use App\Policies\TextPolicy;
use App\Policies\UserPolicy;

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
        Activity::class => ActivityPolicy::class,
        Album::class => AlbumPolicy::class,
        News::class => NewsPolicy::class,
        Partner::class => PartnerPolicy::class,
        Photo::class => PhotoPolicy::class,
        Text::class => TextPolicy::class,
        User::class => UserPolicy::class
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
