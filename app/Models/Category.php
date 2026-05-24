<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title', 'slug'];

    //Operación inversa de la llave foranea
    function posts(){
        return $this->hasMany(Post::class);
    }
}
