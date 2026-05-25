<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //insert into "posts" ("title", "slug", "content", "category_id", "posted", "image", "updated_at", "created_at") values (test title, test slug, test content, 1, not, test image, 2026-05-23 23:05:09, 2026-05-23 23:05:09))
    protected $fillable = ['title', 'slug', 'content', 'description', 'category_id', 'descripcion', 'posted', 'image'];

    // Llve foranea
    public function category(){
        //return $this->belongsTo(Category::class, 'category_id');
        return $this->belongsTo(Category::class);

    }
}
