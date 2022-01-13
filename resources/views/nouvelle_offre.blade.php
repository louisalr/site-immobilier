@extends('layouts.app')

@section('content')

    <form action="#" method="post">

    @csrf
    <label for="name"> Titre :</label>
    <input type="text" name="titre" class="border-4 border-sky-500">

    <label for="name"> Prénom :</label>
    <input type="text" name="prenom" class="border-4 border-sky-500">

    <label for="name"> Adresse mail :</label>
    <input type="text" name="adrmail" class="border-4 border-sky-500">

    <textarea name="content" cols="30" rows="10" class="border-4 border-sky-500"></textarea>

    <button type="submit"> Envoyer</button>
    </form>

@endsection