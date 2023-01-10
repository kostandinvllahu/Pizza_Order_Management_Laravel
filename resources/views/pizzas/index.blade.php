@extends('layouts.app')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        </div>
    @endif
<div class="wrapper-index">
    <h1>Pizza Orders</h1>
    @foreach($pizzas as $pizza)
        <div class="pizza-item">
            <img src="/pizza.png" alt="pizza icon">
           <h4><a href="/pizzas/{{$pizza->id}}">{{$pizza->name}}</a></h4>
        </div>
    @endforeach
</div>
@endsection
