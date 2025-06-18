<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class surveys extends Model
{
    /** @use HasFactory<\Database\Factories\SurveysFactory> */
    use HasFactory;

    public function questions()
    {
        return $this->hasMany(questions::class);
    }

    public function responses()
    {
        return $this->hasMany(Response::class);
    }
}