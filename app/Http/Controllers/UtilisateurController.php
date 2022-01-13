<?php

namespace App\Http\Controllers;

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
        return view('nouvelle_offre');
    }

    public function enregistrer(Request $request){
        
    }

    
}
