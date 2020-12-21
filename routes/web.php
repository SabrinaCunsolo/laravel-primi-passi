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
        'nome' => 'Sabrina',
        'cognome' => 'Cunsolo'
    ];
    return view('home', $data);
});

Route::get('/chi-siamo', function () {
    return view('/about');
});

Route::get('/contatti', function () {
    $data = [
        'staff' => [
            'Andrea Rossi',
            'Maria Bianchi',
            'Luca Verdi',
        ]
    ];
    return view('/contact-us', $data);
});
