@extends('layouts.app')

@section('content')

    <h1> Page d'inscription</h1>

    <form action="#" method="post">

    @csrf
    <label for="name"> Nom :</label>
    <input type="text" name="nom" class="border-4 border-sky-500">

    <label for="name"> Prénom :</label>
    <input type="text" name="prenom" class="border-4 border-sky-500">

    <label for="name"> Adresse mail :</label>
    <input type="text" name="adrmail" class="border-4 border-sky-500">

    <textarea name="content" cols="30" rows="10" class="border-4 border-sky-500"></textarea>

    <button type="submit"> Envoyer</button>
    </form>

@endsection