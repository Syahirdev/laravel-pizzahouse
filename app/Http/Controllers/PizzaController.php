<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
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
            'pizzas' => $pizzas
        ]);
    }

    public function show($id){
        return view('details', ['id' => $id]);
    }
}
