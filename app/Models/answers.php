<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Response as ResponseModel;   // alias to avoid the Policy clash



class answers extends Model
{
    /** @use HasFactory<\Database\Factories\AnswersFactory> */
    use HasFactory;

    protected $fillable = [
        'response_id',
        'question_id',
        'answer',
    ];

    /* --- Relationships --- */
    public function response()  { return $this->belongsTo(Response::class); }
    public function question()  { return $this->belongsTo(Questions::class); }
}