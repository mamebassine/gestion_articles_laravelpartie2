<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'nom',
        'description',
        'date_creation',
        'type',
        'image',
        // Ajoutez ici les autres champs fillable
    ];

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }
}

    




