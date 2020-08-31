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
    return view('welcome');
});

Route::get('/pizzas', function () {
    $pizzas = [
        [
            'type' => 'Hawaiian',
            'base' => 'Cheesy',
        ],
        [
            'type' => 'Volcano',
            'base' => 'Crispy',
        ],
        [
            'type' => 'Vegies',
            'base' => 'Thin',
        ],
    ];

    return view('pizzas', [
        'pizzas' => $pizzas,
        'name'=> request('name'),   
        'age' => request('age'),
    ]);
});

Route::get('/pizzas/{id}', function ($id) {

    return view('details', ['id' => $id]);
});
