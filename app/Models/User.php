<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function blogs() //$user->blogs
    {
        return $this->hasMany(Blog::class);
    }

    public function getNameAttribute($value)
    {
        return ucwords($value); //john => John
    }
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function subscribedBlogs()
    {
        return $this->belongsToMany(Blog::class);
    }

    public function isSubscribed($blog)
    {
        return auth()->user()->subscribedBlogs &&
            auth()->user()->subscribedBlogs->contains('id', $blog->id);
    }
}
