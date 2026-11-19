<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CharacterAnswer extends Model
{

    public $timestamps = true;

    protected $fillable = [
        "answer",
        "character_id",
        "question_id"
    ];

    protected function casts(): array {
        return [
            "answer" => "boolean",
        ];
    }

    public function character(): BelongsTo {
        return $this->belongsTo(Character::class);
    }

    public function question(): BelongsTo {
        return $this->belongsTo(Question::class);
    }
}
