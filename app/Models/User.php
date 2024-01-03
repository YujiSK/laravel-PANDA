<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Constants\UserConstants;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'password',
        'birthday',
        'gender',
        'phone_num',
        'role',
        'situation',
    ];


    protected $hidden = [
        'role',
        'situation',
        'password',
        'remember_token',
        'email_verified_at',
        'created_at',
        'updated_at',
    ];


    protected $casts = [
        'birthday' => 'datetime',
        'gender' => 'int',
        'phone_num' => 'string',
        'role' => 'int',
        'situation' => 'int',
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getEmailForVerification()
    {
        return $this->email;
    }

    public function markEmailAsVerified()
    {
        return $this->forceFill([
            'email_verified_at' => $this->freshTimestamp(),
        ])->save();
    }

    public static function getGenderListSize()
    {
        return UserConstants::getGenderListSize();
    }

    public static function getRoleListSize()
    {
        return UserConstants::getRoleListSize();
    }
}
