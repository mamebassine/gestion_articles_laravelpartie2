<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // Votre code existant...

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }
    
    
}



