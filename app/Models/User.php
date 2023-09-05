<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

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
        'is_admin' => 'boolean'
    ];

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    protected function setPasswordAttribute($value)
    {
        $this->attributes['password'] =  bcrypt($value);
    }

    public function getNameAttribute($value)
    {
        return ucfirst($value); //hlaingminthan => "Hlaingminthan"
    }

    public function subscribedBlogs()
    {
        return $this->belongsToMany(Blog::class, 'blogs_users');
    }
}
