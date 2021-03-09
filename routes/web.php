<?php

use Illuminate\Support\Facades\Route;

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
    $data = [
        'nome' => 'Alessio',
        'cognome' => 'Verdi',
        'competenze' => [
            'patente infomatica',
            'certificato di inglese',
            'PHP',
            'Javascript'
        ]
    ];
    return view('home', $data);
});

Route::get('/about', function () {
    return view('about');
});
