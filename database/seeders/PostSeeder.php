<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        // DB::statement('SET FOREIGN_KEY_CHECK=0');
        
        Post::truncate(); // Para eliminar los datos
        
        // DB::statement('SET FOREIGN_KEY_CHECK=1');

        $title = Str::random(10);
        // $title = str()->random(20);

        
        for($i=0; $i < 20; $i++){

            $c = Category::inRandomOrder()->first();
            
            Post::create(
                [
                    'title' => $title,

                    'slug' => Str::slug($title),
                    // 'slug' => str($title)->slug(),
                    
                    'description' => "descriptio-$i",
                    'content' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque, ut.",
                    // 'image' => "image-$i",
                    'posted' => "yes",
                    'category_id' => $c->id


                ]
            );
        }
    }
}
