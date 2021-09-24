<?php

namespace App\Models;




use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

   

    protected $fillable = [
        'name',
        'user',
        'password',
    ];
    protected $guarded = [];

    protected $hidden = ['password'];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    protected static function booted()
    {
        static::creating(function ($user) {
            if (!$user->password) {
                $user->password = substr($user->user, 5);
            }
        });
    }


}
