<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    // agar user bisa input nama, email, dan password

    protected $hidden = [
        'password',
        'remember_token',
    ];
    // agar passwordnya hidden
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
