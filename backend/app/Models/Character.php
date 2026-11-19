<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    public $timestamps = true;

    protected $fillable = [
        "name",
        "serie",
        "image",
        "times_found",
    ];


    public function questions() {
        return $this->hasMany(Question::class);
    }
}
