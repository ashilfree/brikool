<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;

    protected $fillable = ['email', 'password', 'name', 'account_id', 'is_verified'];

    public function profile()
    {
        return $this->hasOne(Profile::class, 'member_id');
    }

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
