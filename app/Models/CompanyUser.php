<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'users_name',
        'users_email',
        'users_phone',
        'account_status',
        'survey_status'
    ];

    // Status Constants
    const ACCOUNT_ACTIVE = 1;
    const ACCOUNT_INACTIVE = 2;
    const ACCOUNT_BLOCKED = 3;

    const SURVEY_NOT_SENT = 1;
    const SURVEY_SENT = 2;
    const SURVEY_SUBMITTED = 3;

    // Relationships
    public function company()
    {
        return $this->belongsTo(CompanyMaster::class);
    }

    // Accessors
    public function getAccountStatusLabelAttribute()
    {
        return match($this->account_status) {
            self::ACCOUNT_ACTIVE => 'Active',
            self::ACCOUNT_INACTIVE => 'Inactive',
            self::ACCOUNT_BLOCKED => 'Blocked',
            default => 'Unknown',
        };
    }

    public function getSurveyStatusLabelAttribute()
    {
        return match($this->survey_status) {
            self::SURVEY_NOT_SENT => 'Not Sent',
            self::SURVEY_SENT => 'Sent - Not Submitted',
            self::SURVEY_SUBMITTED => 'Submitted',
            default => 'Unknown',
        };
    }

    // Scopes
    public function scopeActiveAccount($query)
    {
        return $query->where('account_status', self::ACCOUNT_ACTIVE);
    }

    public function scopeWithSurveySent($query)
    {
        return $query->where('survey_status', self::SURVEY_SENT);
    }
}