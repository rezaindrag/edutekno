<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    const VERIFIED_USER = true;
    const UNVERIFIED_USER = false;
    const ADMIN_USER = true;
    const REGULAR_USER = false;

    /**
     * Fillable attributes
     */
    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'verified',
        'verification_token',
        'admin'
    ];

    /**
     * Hidden attributes
     */
    protected $hidden = [
        'password', 
        'remember_token', 
        'verification_token'
    ];

    /**
     * Generate verification code
     * 
     * @return string
     */
    public static function generateVerificationCode()
    {
        return str_random(40);
    }
}
