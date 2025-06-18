<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    /** @use HasFactory<\Database\Factories\SubscriptionFactory> */
    use HasFactory;

    protected $fillable = [ 'email', 'token', 'verified_at' ];

    protected $casts  = [ 'verified_at' => 'datetime' ];   // Carbon instance
}