<?php

namespace App\Http\Controllers;

use App\Models\Offres;
use App\Models\Favoris;
use App\Models\Message;
use App\Models\Type_maison;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;


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

        /*

        $request->validate([
            'titre' => 'required',
            'cout_loyer' => 'required | numeric',
            'cout_charges' => 'required | numeric',
            'superficie' => 'required | numeric',
            'description' => 'required ',
            'adresse' => 'required',
            'ville' => 'required',
            'code_postal' => 'required | min:5 | max:5'
        ]);*/

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

    public function creer(){

    }

    public function envoyer(Request $request, $id){

        
        Message::create([
            'contenu'-> $request->message,
            'from_id' -> Auth::id(),
            'to_id' -> $id,
        ]);


    }

    public function favoris(){
        return view('favoris');
    }

    public function ajouter_favoris() : JsonResponse
    {
        $offre = Offres::find(request()->id);

        if($post->isFavoris()){
            Favoris::where([
                'user_id' => auth()->user()->id,
                'post_id' => request()->id
            ])->delete(); 

            if($res){
                return response()->json([
                    'statut' => Offres::find(request()->id)->favoris->count()
                ]);
            }


        }else{
            $favori = new Favoris();

            $favori->user_id = auth()->user()->id;
            $favori->offre_id = request()->id;

            $favori->save();

            return response()->json([
                'statut' => Offres::find(request()->id)->favoris->count()
            ]);
        }
    }

    public function AjouterFavoris(Offres $offre)
    {
        Auth::user()->favorites()->attach($offre->id);

        return back();
    }

    public function RetirerFavoris(Offres $offre)
    {
        Auth::user()->favorites()->detach($offre->id);

        return back();
    }

    
}
