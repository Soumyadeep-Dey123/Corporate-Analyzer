<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserResponse extends Model
{
    use HasFactory;
    protected $table = 'user_responses';

    protected $primaryKey = 'response_id'; // Custom primary key

    protected $fillable = [
        'question_id',
        'company_users_id',
        'value',
    ];

    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id');
    }

    public function companyUser()
    {
        return $this->belongsTo(CompanyUser::class, 'company_users_id');
    }
}
