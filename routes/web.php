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
    
    $links = [
        'smsfinans' => 'http://google.com',
        'ekapusta' => 'http://google.com',
        'webbankir' => 'http://google.com',
        'lime' => 'http://google.com',
        'vivus' => 'http://google.com',
        'moneza' => 'http://google.com',
        'creditplus' => 'http://google.com',
        'moneyman' => 'http://google.com',
        'payps' => 'http://google.com',
        'greenmoney' => 'http://google.com',
        'zaymer' => 'http://google.com',
        'ezaem' => 'http://google.com',
        'creditpomojet' => 'http://google.com',
        'smart' => 'http://google.com',
        'joymoney' => 'http://google.com',
        'oneclick' => 'http://google.com',
    ];
    
    
    
    
    return view('main', ['city' => $city, 'links' => $links]);
});
