<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Se define esta varible ya que venia en la migracion de BD
    public $timestamps = false;

    protected $fillable = ['title', 'slug'];

    //Operación inversa de la llave foranea
    function posts(){
        return $this->hasMany(Post::class);
    }
}
