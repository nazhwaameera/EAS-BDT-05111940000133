<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Category extends Model
{ 
    //use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'categories';
    protected $fillable = ['name'];

    public function posts()
    {
        //return $this->embedsMany(Post::class);
        return $this->hasMany(Post::class);
    }
}


