<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomQuote extends Model
{
    /** @use HasFactory<\Database\Factories\CustomQuoteFactory> */
    use HasFactory;

    protected $fillable = [
        'company_name',
        'contact_person',
        'email',
        'phone',
        'company_size',
        'requirements',
    ];
}