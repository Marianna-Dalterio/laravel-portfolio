<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //creo la relazione One to Many, Type è il mio model principale poichè indipendente, esiste a prescindere da Projects
    public function projects()
    {
        return  $this->hasMany(Project::class);
    }
}
