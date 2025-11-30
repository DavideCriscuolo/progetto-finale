<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{

    //per la relazione 1 ad 1
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function medias()
    {
        return $this->hasMany(Media::class);
    }


    //per relazione molti a molti

    public function plattforms()
    {
        return $this->belongsToMany(Plattform::class);
    }
}
