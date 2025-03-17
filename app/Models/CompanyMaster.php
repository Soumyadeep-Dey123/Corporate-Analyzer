<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyMaster extends Model
{
    use HasFactory;

    protected $table = 'company_masters';

    protected $fillable = [
        'company_name',
        'company_address',
        'company_email',
        'company_phone',
        'status',
    ];

         public static $rules = [
        'company_name' => 'required|string|max:255',
        'company_address' => 'required|string|max:255',
        'company_email' => 'required|email|max:255',
        'company_phone' => 'required|string|max:255'
    ];
}
