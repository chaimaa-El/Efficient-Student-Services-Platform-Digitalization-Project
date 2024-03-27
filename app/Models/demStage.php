<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class demStage extends Model
{
    use HasFactory;
    protected $fillable = ['Nom_Etudiant','Prenom_Etudiant', 'CNE', 'Filière','Période', 'Email', 'Téléphone'];
    
}
