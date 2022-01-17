@extends('layouts.app')

@section('content')


    @if($offres->count() > 0)

        @foreach($offres as $offre) 
            <h3 class="container mx-auto m-1 border-2"> <a href=" {{ route('offre.show' , ['id' => $offre->id])  }} ">{{ $offre -> titre }} </a> </h3>  
        @endforeach

    @else

        <h1> Il n'y a pour l'instant aucunes offres de disponible ! </h1>

        <form action="{{ route('poster.create') }}" method="get">

            <button type="submit" class="border-4 border-sky-500"> Poster une offre</button>

        </form> 

    @endif


@endsection