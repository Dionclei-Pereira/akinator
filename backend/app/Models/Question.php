<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Override;

class Question extends Model
{
    public $timestamps = false;

    protected $fillable = [
        "label",
        "weight"
    ];

    public function characterAnswers(): HasMany
    {
        return $this->hasMany(CharacterAnswer::class);
    }
}
