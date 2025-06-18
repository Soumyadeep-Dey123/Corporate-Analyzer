<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Companies as Company; // alias to avoid the Policy clash

class surveys extends Model
{
    /** @use HasFactory<\Database\Factories\SurveysFactory> */
    use HasFactory;

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function questions()
    {
        return $this->hasMany(questions::class);
    }

    public function responses()
    {
        return $this->hasMany(Response::class);
    }
}