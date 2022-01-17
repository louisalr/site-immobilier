<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offres extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'type_habitation', 'cout_loyer', 'cout_charges', 'type_chauffage', 'superficie', 'description', 'adresse', 'ville', 'code_postal'];

}
