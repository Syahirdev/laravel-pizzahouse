@extends('layouts.layout')

@section('content')
<div class="wrapper pizza-index">        
    <h1>Pizza Orders</h1>
        @foreach ($pizzas as $pizza)
            <div class="pizza-item">
                <h4>
                    <img src="/img/pizza.png" alt="pizza icon">
                    <a href="/pizzas/{{$pizza->id}}">
                        {{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }}
                    </a>
                </h4>
            </div>
        @endforeach
</div>
@endsection