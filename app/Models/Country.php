<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function posts() {
        return $this->hasManyThrough(Post::class, User::class);
    }

    //if the user_id and country_id was different ,then do this
    // public function posts() {
    //     return $this->hasManyThrough('Post::class', 'User::class','the_country_id', 'the_user_id')
    // };
}
