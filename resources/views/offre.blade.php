@extends('layouts.app')

@section('content')

<div class="container mx-auto m-1 border-2">

    <h1 class="grid place-items-center"> {{ $offre-> titre }} </h1>

    <h2> Type d'habitation : {{ $offre -> type_habitation }} </h2>

    <h2> Cout loyer  : {{ $offre -> cout_loyer }}</h2> 

    <h2> Cout charges  : {{ $offre -> cout_charges }}</h2>
    
    <h2> Type chauffage  : {{ $offre -> type_chauffage }}</h2> 

    <h2> Superficie : {{ $offre -> superficie }}</h2> 

    <h2> Description  : {{ $offre -> description }}</h2> 

    <h2> Adresse  : {{ $offre -> ville }}</h2> 

    <h2> Adresse  : {{ $offre -> adresse }}</h2> 

    <h2> Adresse  : {{ $offre -> code_postal }}</h2> 
</div>
@endsection