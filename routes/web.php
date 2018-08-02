<?php

include("SxGeo.php");
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $SxGeo = new SxGeo(database_path('sypexgeo/SxGeoCity.dat'));
    $city = 'Вашем городе';

    if (($ip = '113.190.242.149') && ($geo = $SxGeo->get($ip))) {
        $city = isset($geo['city']['name_ru']) ? 'городе ' . $geo['city']['name_ru'] : $city;
    }
    return view('main', ['city' => $city]);
});
