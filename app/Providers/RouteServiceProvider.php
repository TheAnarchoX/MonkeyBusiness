<?php

namespace App\Providers;

use App\Activity;
use App\Message;
use App\Photo;
use App\Text;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();

        Route::bind("activiteit", function($activity) {
            return Activity::where("title", "{$activity}")->first();
        });

        Route::bind("partner", function($partner) {
            return Partner::where("name", "{$partner}")->first();
        });

        Route::bind("album", function($album) {
            return Album::where("name", "{$album}")->first();
        });

        Route::bind('foto', function ($uuid) {

            $photo = Photo::where('uuid', $uuid);

            if (request()->route()->hasParameter('album')) {
                $photo->whereHas('album', function ($q) {
                    $q->where('name', request()->route('album'));
                });
            }

            return Photo::where('uuid', $uuid)->firstOrFail();
        });

        Route::bind('bericht', function($uuid) {
            return Message::where("uuid", "{$uuid}")->first();
        });

        Route::bind("tekst", function($uuid) {
            return Text::where("uuid", "{$uuid}")->first();
        });

        Route::bind("gebruiker", function($user) {
            return User::where("username", "{$user}")->first();
        });
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
