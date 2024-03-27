<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class history extends Model
{
    use HasFactory;
    protected $fillable=[
        'id'
            ,'Nom_Etudiant'
            ,'Prenom_Etudiant'
            ,'CNE'
            ,'Niveau'
            	
            ,'Filière'
            ,'created_at'
            	,'updated_at'
                ,'typeDocumnt'
    ];
}