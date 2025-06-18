<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemoSurvey extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','email','department','position','work_experience',
        'engagement','satisfaction','work_life_balance','communication',
        'leadership','growth','recommend','feedback','improvements',
    ];

    protected $guarded = [];

}