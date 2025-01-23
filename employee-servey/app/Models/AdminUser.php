<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminUser extends Authenticatable
{
    // Specify the table if it's not the default pluralized name
    protected $table = 'admin_users';

    // Primary key (if different from the default 'id')
    protected $primaryKey = 'admin_id';

    // Fillable fields for mass assignment
    protected $fillable = [
        'admin_name',
        'admin_email',
        'admin_phone',
        'password',
    ];

    // Hidden fields (e.g., password) to exclude from arrays and JSON
    protected $hidden = [
        'password',
        'remember_token', // Include this if using Laravel's built-in authentication
    ];


    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

}