<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plattform extends Model
{


    //per relazione molti a molti

    public function games()
    {
        return $this->belongsToMany(Game::class);
    }
}
