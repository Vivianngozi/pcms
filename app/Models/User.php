<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

// use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    /* calling user_id in posts table */

    public function post() {
        // return $this->hasOne('App\Models\Post');

        //new way

        return $this->hasOne(Post::class);
    }

    public function posts() {
        return $this->hasMany(Post::class);
    }

    /* for many to many */

    // public function roles() {
    //     return $this->belongsToMany(Role::class);

        //to customize table name and column
        // return $this->belongsToMany(Role::class, 'user_role', 'role_id', 'user_id');
    // }

    public function roles() {
        return $this->belongsToMany(Role::class)->withPivot('created_at');
    }

    public function photos() {
        return $this->morphMany(Photo::class, 'imageable');
    }

    //Accessor

    public function getNameAttribute($value) {

        // return ucfirst($value);

        return strtoupper($value);
    }

    // Mutator

    public function setNameAttribute($value) {

        $this->attributes['name'] = strtoupper($value);
    }
}
