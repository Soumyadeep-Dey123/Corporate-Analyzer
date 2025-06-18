<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
use App\Models\Survey;

class Response extends Model
{
    /** @use HasFactory<\Database\Factories\ResponseFactory> */
    use HasFactory;

    protected $fillable = [
        'survey_id',
        'employee_id',
        'submitted_at',
    ];

    protected $casts = [
        'submitted_at' => 'datetime',
    ];                                        // auto‑casts to Carbon instances :contentReference[oaicite:4]{index=4}

    /* --- Relationships --- */
    public function survey()
    {
        return $this->belongsTo(surveys::class);
    }

    public function employee()
    {
        return $this->belongsTo(employees::class);
    }

    public function answers()
    {
        return $this->hasMany(Answers::class);
    }
}