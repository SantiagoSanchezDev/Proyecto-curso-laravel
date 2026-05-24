<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //CREATE

        // Post::create([
        //     'title' => 'test title',
        //     'slug' => 'test slug',
        //     'content' => 'test content',
        //     'category_id' => 1,
        //     'description' => 'test descripcion',
        //     'posted' => 'not',
        //     'image' => 'test image'
        // ]);

        // GET
        // $post = Post::find(1); //slect*from table where id = 1

        // UPDATE
        // $post->update([
        //     'title' => 'test title new'
        // ]);

        // DELETE
        // $post = Post::find(3)->delete(); 
        // dd($post); // true/false

        // return dd($post);

        // return "Hola mundo desde POSTControler";

        $post = Post::find(1);
        $category = Category::find(1);

        return dd($category->posts);
        // return dd($post->category->title);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
