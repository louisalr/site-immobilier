<?php

namespace App\Models;

use App\Models\Message;

use App\Models\Favoris;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offres extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'type_habitation', 'cout_loyer', 'cout_charges', 'type_chauffage', 'superficie', 'description', 'adresse', 'ville', 'code_postal'];

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function favorited()
    {
        $id = auth()->user()->id;
        return (bool) Favoris::where('user_id', $id)
        ->where('offre_id', $this->id)
        ->first();
    }
}
