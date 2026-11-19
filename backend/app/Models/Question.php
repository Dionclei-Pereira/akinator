<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public $timestamps = false;


    public function characters() {
        return $this->belongsToMany(Character::class);
    }
}
