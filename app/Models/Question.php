<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $table = 'questions';

    protected $fillable = ['question'];

    public function responses()
    {
        return $this->hasMany(UserResponse::class, 'question_id');
    }
}
