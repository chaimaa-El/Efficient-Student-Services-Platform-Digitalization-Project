<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resEspace extends Model
{
    use HasFactory;
    protected $fillable = ['Nom_Representant', 'CNE_Representant', 'Niveau_Representant', 'Email_Representant', 'Téléphone_Representant', 'Event', 'Date', 'Durée','Public','Espace','Equipements'];
    
}
