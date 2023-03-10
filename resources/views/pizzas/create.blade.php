@extends('layouts.app')
@section('content')
<div class="wrapper create-pizza">
    <h1>Create a new Pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Your name:</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose pizza type:</label>
        <select name="type" id="type">
            <option value="margarita">Margarita</option>
            <option value="capricosa">Capricosa</option>
            <option value="volcano">Volcano</option>
            <option value="veg supreme">Veg Supreme</option>
            <option value="ham & cheese">Ham & Cheese</option>
        </select>

        <label for="base">Choose base:</label>
        <select name="base" id="base">
            <option value="cheesy crust">Cheesy Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="thin & crispy">Thin & Crispy</option>
            <option value="thick">Thick</option>
        </select>

        <fieldset class="toppings">
            <label>Extra toppings:</label>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms</input>
            <input type="checkbox" name="toppings[]" value="peppers">Peppers</input>
            <input type="checkbox" name="toppings[]" value="garlic">Garlic</input>
            <input type="checkbox" name="toppings[]" value="olives">Olives</input>
        </fieldset>
        <input type="submit" value="Order Pizza">
    </form>
</div>
@endsection
