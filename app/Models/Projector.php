<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projector extends Model
{
    use HasFactory;

    public function photos()
    {
        return $this->morphMany(Photo::class, 'photoable');
    }
}
