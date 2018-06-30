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
Route::group(['prefix' =>'/','as' =>'public.'], function () {
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
    Route::get('/fotos/albums/{album}/{foto}', 'AlbumController@showPhoto')->name('albums.foto.show');
    Route::get('/contact', 'MessageController@create')->name('berichten.create');
    Route::post('/contact', 'MessageController@store')->name('berichten.store');
    Route::get('/login', 'AuthController@login')->name("auth.login");
    Route::post("/login", "AuthController@authenticate")->name("auth.authenticate");
    Route::get("/logout", "AuthController@logout")->name("auth.logout");
});

const PARAM = [
    'activiteiten' => 'activiteit',
    'berichten' => 'bericht',
    'teksten' => 'tekst'
];

Route::group(['prefix' =>'admin', 'namespace' => 'Admin',  'as' => 'admin.', 'middleware' => 'auth'], function() {
    Route::get("/", "AdminController@index")->name("dashboard");
    Route::resource("/activiteiten", "ActivityController", [PARAM['activiteiten']]);
    Route::get('/activiteiten/huidig', 'ActivityController@current')->name('activiteiten.current');
    Route::resource("/partners", "PartnerController");
    Route::resource("/nieuws", "NewsController");
    Route::resource("/berichten", "MessageController", [PARAM['berichten']]);
    Route::resource("/teksten", "TextController", [PARAM['teksten']]);
    Route::resource("/albums", "AlbumController");
    Route::patch("/albums/{album}/koppel/{foto}", "AlbumController@attach")->name("album.attach");
    Route::patch("/albums/{album}/ontkoppel/{foto}", "AlbumController@detach")->name("album.detach");
    Route::resource("/fotos", "PhotoController");
    Route::resource("/gebruikers", "UserController");
    Route::get('/mijn-profiel', "UserController@showCurrentUser")->name('gebruikers.current.show');
    Route::get('/mijn-profiel/instellingen', "UserController@showSettings")->name('gebruikers.settings.show');
    Route::patch('/mijn-profiel/instellingen', "UserController@updateSettings")->name('gebruikers.settings.update');
    Route::get('/gebruikers/algemeen', "UserController@generalUsers")->name('gebruikers.general');
    Route::get('/gebruikers/admin', "UserController@adminUsers")->name('gebruikers.admin');
    Route::get('/gebruikers/superUsers', "UserController@superUsers")->name('gebruikers.superUsers');
    Route::get("/logboeken", "LogController@index")->name("log.index");
    Route::get("/logboeken/{log}", "LogController@show")->name("log.show");
    Route::get("/statistieken", "StatsController@index")->name("stats.index");
});
