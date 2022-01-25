@extends('layouts.app')

@section('content')


    @if($offres->count() > 0)



        <div class="">
            <div class="row">
                <div>
                    <div class="page-header">
                        <h3 class="content-center title">Liste des 10 dernières offres </h3>
                    </div>
                    @forelse ($offres as $offre)
                        <div class="panel panel-default offres-css">
                            <div class="panel-heading title-des">
                                <a href="{{ route('offre.show' , ['id' => $offre->id]) }}">
                                    {{ $offre->titre }} 
                                </a>
                            </div>

                            <div class="panel panel-default description">
                                {{ $offre->description }}
                            </div>

                            @auth
                            <div id="app" class="">
                            <favorite
                                :offre={{ $offre->id }}
                                :favorited={{ $offre->favorited() ? 'true' : 'false' }}
                            ></favorite>
                            </div>

                            @endauth
                            
                        </div>
                    @empty
                        <p>No post created.</p>
                    @endforelse

                </div>
            </div>
        </div>


    @else

        <h1> Il n'y a pour l'instant aucunes offres de disponible ! </h1>

        <form action="{{ route('poster.create') }}" method="get">

            <button type="submit" class="border-4 border-sky-500"> Poster une offre</button>

        </form> 

    @endif


@endsection