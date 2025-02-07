<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addComputer extends Model
{
    use HasFactory;
    protected $fillable = [
        'marque', 
        'modele',
        'processeur' ,
        'cpu',
        'core',
        'ram', 
        'type_stockage',
        'capacite_stockage',
        'taille_ecran',
        'clavier',
        'carte_graphique',
        'memoire_video',
        'ecran_tactile',
        'generation',
        'autonomie',
        'prix',
        'photo'
        
        
    ];
}
