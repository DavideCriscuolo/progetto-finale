<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'medias'; // per forzare a trovare la tabella con questo nome
    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}
