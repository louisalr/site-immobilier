<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_maison extends Model
{
    use HasFactory;

    protected $primaryKey = 'type';

    public $incrementing = false;

    protected $keyType = 'string';
}
