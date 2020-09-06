<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    public function index(){

        //get all pizza from model
        // $pizzas = Pizza::all();

        //get all and order by name
        // $pizzas = Pizza::orderBy('price', 'asc')->get();

        //search all and retrieve the searched only
        // $pizzas = Pizza::where('type','hawaiian')->get();
        
        //get the latest pizza that new added
        $pizzas = Pizza::latest()->get();

        return view('pizzas.index', [
            'pizzas' => $pizzas
        ]);
    }

    public function show($id){
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create(){
        return view('pizzas.create');
    }
}
