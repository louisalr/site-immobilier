<?php

namespace App\Http\Controllers;

use App\Models\Offres;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function index()
    {

        $offres = Offres::all();

        return view('accueil',[
            'offres' => $offres
        ]);
    }

    public function show($id)
    {

        $offre =  Offres::findOrFail($id);

        return view('offre',[
            'offre' => $offre
        ]);
    }

    public function contact()
    {
        return view('contact');
    }
}
