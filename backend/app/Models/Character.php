<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Character extends Model
{
    public $timestamps = true;

    protected $fillable = [
        "name",
        "serie",
        "image",
        "times_found",
    ];


    public function characterAnswers(): HasMany {
        return $this->hasMany(CharacterAnswer::class);
    }
}
