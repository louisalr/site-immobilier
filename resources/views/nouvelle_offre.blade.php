@extends('layouts.app')

@section('content')

    <form action="{{ route('poster.store') }}" method="post">

    @csrf

    
    <label for="name"> Titre* :</label>
    @if ($errors->has('titre')) <p class="help-block text-red-700">{{ $errors->first('titre') }}</p> @endif
    <input type="text" name="titre" class="border-4 border-sky-500 block">
    
    <label for="name"> Type d'habitation* :</label>
    <select name="type_hab" id="habitation" class="block">

    @foreach($types as $type)
        <option value="{{ $type->description}} "> {{ $type->description}} </option>
    @endforeach

    </select>

    
    <label for="name"> Coût loyer :</label>
    @if ($errors->has('cout_loyer')) <p class="help-block text-red-700">{{ $errors->first('cout_loyer') }}</p> @endif
    <input type="text" name="cout_loyer" class="border-4 border-sky-500 block">

    
    <label for="name"> Coût charges* :</label>
    @if ($errors->has('cout_charges')) <p class="help-block text-red-700">{{ $errors->first('cout_charges') }}</p> @endif
    <input type="text" name="cout_charges" class="border-4 border-sky-500 block">

    
    <label for="name"> Type chauffage* : </label>
    <input type="text" name="type_chauf" class="border-4 border-sky-500 block">



    <label for="name"> Superficie* : </label>
    @if ($errors->has('superficie')) <p class="help-block text-red-700">{{ $errors->first('superficie') }}</p> @endif
    <input type="text" name="superficie" class="border-4 border-sky-500 block">

    <label for="name"> Description* : </label>
    @if ($errors->has('description')) <p class="help-block text-red-700">{{ $errors->first('description') }}</p> @endif
    <textarea name="description" class="border-4 border-sky-500 block"> </textarea>


    <label for="name"> Adresse* : </label>
    @if ($errors->has('adresse')) <p class="help-block text-red-700">{{ $errors->first('adresse') }}</p> @endif
    <input type="text" name="adresse" class="border-4 border-sky-500 block">

    
    <label for="name"> Ville : </label>
    @if ($errors->has('ville')) <p class="help-block text-red-700">{{ $errors->first('ville') }}</p> @endif
    <input type="text" name="ville" class="border-4 border-sky-500 block">

    
    <label for="name"> Code postal : </label>
    @if ($errors->has('code_postal')) <p class="help-block text-red-700">{{ $errors->first('code_postal') }}</p> @endif
    <input type="text" name="code_postal" class="border-4 border-sky-500 block">
    
    <button type="submit"> Poster votre offre </button>


    </form>

@endsection