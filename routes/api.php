<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('api')->get('/sitemap', function (Request $request) {
    $c = new \Carbon\Carbon();
    $ts = $c::now()->timestamp;
    $sitemap = \Spatie\Sitemap\SitemapGenerator::create("cronesteyn.dev")->writeToFile(public_path("sitemap\{$ts}.xml"));

});