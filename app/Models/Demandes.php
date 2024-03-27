<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demandes extends Model
{
    protected $table= 'demandes';
    protected $fillable = ['Type Document','Date soumission','Nom','Niveau','CNE','Traité'];

}



