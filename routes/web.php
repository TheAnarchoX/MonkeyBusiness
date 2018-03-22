<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the 'web' middleware group. Now create something great!
|
*/
Route::group(['domain' =>'cronesteyn.test','as' =>'public.'], function () {
    Route::get('/', 'HomeController@index')->name('landing');
    Route::get('/activiteiten', 'ActivityController@index')->name('activiteiten.index');
    Route::get('/activiteiten/{activiteit}', 'ActivityController@show')->name('activiteiten.show');
    Route::get('/partners', 'PartnerController@index')->name('partners.index');
    Route::get('/partners/{partner}', 'PartnerController@show')->name('partners.show');
    Route::get('/nieuws', 'NewsController@index')->name('nieuws.index');
    Route::get('/nieuws/{nieuws}', 'NewsController@show')->name('nieuws.show');
    Route::get('/fotos', 'PhotoController@index')->name('fotos.index');
    Route::get('/fotos/{foto}', 'PhotoController@show')->name('fotos.show');
    Route::get('/fotos/albums', 'AlbumController@index')->name('albums.index');
    Route::get('/fotos/albums/{album}', 'AlbumController@show')->name('albums.show');
    Route::get('/fotos/albums/{album}/{foto}', 'PhotoController@show')->name('fotos.show');
    Route::get('/contact', 'MessageController@create')->name('berichten.create');
    Route::post('/contact', 'MessageController@store')->name('berichten.store');
    Route::get('/login', 'AuthController@login')->name("auth.login");
    Route::post("/login", "AuthController@authenticate")->name("auth.authenticate");
    Route::get("/logout", "AuthController@logout")->name("auth.logout");

    Route::get('/routes', function()
    {
        header('Content-Type: application/excel');
        header('Content-Disposition: attachment; filename="routes.csv"');

        $routes = Route::getRoutes();
        $fp = fopen('php://output', 'w');
        fputcsv($fp, ['METHOD', 'URI', 'NAME', 'ACTION']);
        foreach ($routes as $route) {
            if(!preg_match("/_debugbar/", $route->uri)) {
                fputcsv($fp, [head($route->methods()) , $route->uri(), $route->getName(), $route->getActionName()]);
            }
        }
        fclose($fp);
    })->name("routes");
    return "true";
});

Route::group(['domain' => 'admin.cronesteyn.test', 'namespace' => 'Admin',  'as' => 'admin.'], function() {
    Route::get("/", "AdminController@index")->name("dashboard");
    Route::resource("/activiteiten", "ActivityController", ['parameters' => [
        'activiteiten' => 'activiteit'
    ]]);
    Route::resource("/partners", "PartnerController");
    Route::resource("/nieuws", "NewsController");
    Route::resource("/berichten", "MessageController", ['parameters' => [
        'berichten' => 'bericht'
    ]]);
    Route::resource("/teksten", "TextController", ['parameters' => [
        'teksten' => 'tekst'
    ]]);
    Route::resource("/albums", "AlbumController");
    Route::resource("/gebruikers", "UserController");
    Route::patch("/albums/{album}/koppel/{foto}", "AlbumController@attach")->name("album.attach");
    Route::patch("/albums/{album}/ontkoppel/{foto}", "AlbumController@detach")->name("album.detach");
    Route::resource("/fotos", "PhotoController");
    Route::get("/logboeken", "LogController@index")->name("log.index");
    Route::get("/logboeken/{log}", "LogController@show")->name("log.show");
});
