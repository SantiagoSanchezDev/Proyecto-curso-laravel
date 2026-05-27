<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::statement('SET FOREIGN_KEY_CHECK=0');
        
        Category::truncate(); // Para eliminar los datos
        
        // DB::statement('SET FOREIGN_KEY_CHECK=1');

        for($i=0; $i < 20; $i++){
            Category::create(
                [
                    'title' => "new title $i",
                    'slug' => "category-$i"

                ]
            );
        }
        
    }
}
