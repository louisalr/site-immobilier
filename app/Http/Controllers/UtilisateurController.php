<?php

namespace App\Http\Controllers;

use App\Models\Offres;
use App\Models\Type_maison;
use Illuminate\Http\Request;


class UtilisateurController extends Controller
{
    public function connexion()
    {
        return view('auth.login');
    }

    public function inscription()
    {
        return view('auth.register');
    }

    public function poster(){

        $types = Type_maison::all();

        return view('nouvelle_offre',[
            'types' => $types
        ]);
    }

    public function enregistrer(Request $request){

        Offres::create([
            'titre' => $request->titre,
            'type_habitation' => $request->type_hab,
            'cout_loyer' => $request->cout_loyer,
            'cout_charges' => $request->cout_charges,
            'type_chauffage' => $request->type_chauf,
            'superficie' => $request->superficie,
            'description' => $request->description,
            'adresse' => $request->adresse,
            'ville' => $request->ville,
            'code_postal' => $request->code_postal,
        ]);

        return view('dashboard');

        
    }

    
}
