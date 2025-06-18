<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Surveys as Survey; // alias to avoid the Policy clash

class companies extends Model
{
    /** @use HasFactory<\Database\Factories\CompaniesFactory> */
    use HasFactory;
    protected $guarded = [
        'id', 'created_at', 'updated_at'
    ];
    public function employees()
    {
        return $this->hasMany(employees::class, 'company_id');
    }
    public function surveys()
    {
        return $this->hasMany(Survey::class);
    }
}