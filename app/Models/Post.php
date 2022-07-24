<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class post extends Model
{

    public $directory = "/images/";
    use HasFactory;

    use SoftDeletes;


    protected $dates = ['deleted_at'];
    
    //telling laravel to allow create

    protected $fillable = [
        'title',
        'content',
        'path'
    ];


    public function user() {
        return $this->belongsTo(User::class);
    }


    //polymorphic

    public function photos() {
        return $this->morphMany(Photo::class, 'imageable');
    }


    public function tags() {

        return $this->morphToMany(Tag::class, 'taggable');
    }


    // query scope

    //Don't use laravel variable, it might not work well 

    public static function scopelast($query) {

        return $query->orderBy('id', 'desc')->get();
      

    }
    

    public function getPathAttribute($value){

        return $this->directory . $value;
    }
}


//If your model name is different from table name, do this

// class PostAdmin extends Model
// {
//     use HasFactory;

//     protected $table = 'posts';

//     protected $primaryKey = 'id';
// }