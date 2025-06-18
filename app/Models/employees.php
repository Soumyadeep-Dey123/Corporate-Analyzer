<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    /** @use HasFactory<\Database\Factories\EmployeesFactory> */
    use HasFactory;
    protected $guarded = [
        'id', 'created_at', 'updated_at'
    ]; 
    public function company()
    {
        return $this->belongsTo(companies::class, 'company_id');
    }
}
