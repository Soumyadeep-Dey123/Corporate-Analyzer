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
    ];

    // Status Constants
    /* const STATUS_ACTIVE  = 1;
    const STATUS_BLOCKED = 0;

    public static $statusLabels = [
        self::STATUS_ACTIVE  => 'Active',
        self::STATUS_BLOCKED => 'Blocked',
    ];

    // Relationship with Company Users
    public function users()
    {
        return $this->hasMany(CompanyUser::class);
    }
    // Accessor for status label
    public function getStatusLabelAttribute()
    {
        return match($this->status) {
            self::STATUS_ACTIVE => 'Active',
            self::STATUS_BLOCKED => 'Blocked',
            default => 'Unknown',
        };
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('status', self::STATUS_ACTIVE);
    }

    public function scopeBlocked($query)
    {
        return $query->where('status', self::STATUS_BLOCKED);
    } */
     // Define validation rules that can be used in your controllers
     public static $rules = [
        'company_name' => 'required|string|max:255',
        'company_address' => 'required|string|max:255',
        'company_email' => 'required|email|max:255',
        'company_phone' => 'required|string|max:255'
    ];
}
