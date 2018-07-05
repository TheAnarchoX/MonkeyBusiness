<?php

namespace App\Providers;

use App\Activity;
use App\Partner;
use App\Message;
use App\Photo;
use App\Text;
use App\News;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider {
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
    public function boot() {
        //

        parent::boot();

        Route::bind("activiteit", function ($activity) {
            return Activity::where("slug", "{$activity}")->with('author')->first();
        });

        Route::bind("activiteiten", function ($activity) {
            return Activity::where("slug", "{$activity}")->with('author')->first();
        });

        Route::bind("partner", function ($partner) {
            return Partner::where("name", "{$partner}")->first();
        });

        Route::bind("album", function ($album) {
            return Album::where("name", "{$album}")->first();
        });

        Route::bind('foto', function ($slug) {

            $photo = Photo::where('slug', $slug);

            if (request()->route()->hasParameter('album')) {
                $photo->whereHas('album', function ($q) {
                    $q->where('name', request()->route('album'));
                });
            }

            return Photo::where('slug', $slug)->firstOrFail();
        });

        Route::bind('bericht', function ($id) {
            return Message::where("id", "{$id}")->first();
        });

        Route::bind('berichten', function ($id) {
            return Message::where("id", "{$id}")->first();
        });

        Route::bind("tekst", function ($key) {
            return Text::where("key", "{$key}")->first();
        });

        Route::bind("teksten", function ($key) {
            return Text::where("key", "{$key}")->first();
        });

        Route::bind("gebruiker", function ($user) {
            return User::where("uuid", "{$user}")->first();
        });

        Route::bind("nieuws", function ($news) {
            return News::where("slug", "{$news}")->first();
        });
        Route::bind("nieuw", function ($news) {
            return News::where("slug", "{$news}")->first();
        });
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map() {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes() {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes() {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }
}
