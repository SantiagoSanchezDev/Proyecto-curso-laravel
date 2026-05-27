<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PutRequest;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
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

        // return "Hola mundo desde Index_POSTControler";

        // $post = Post::find(1);
        // $category = Category::find(1);

        // return dd($category->posts);
        // return dd($post->category->title);

        // $post = Post::get();




        
        // session()->flush();     //destruye la variabl de sesion
        // session(['key' => 'value']);    // crea la variable de sesion por un tiempo determinado
        // session(['key2' => 'value2']);



        // session()->forget('key');   // Elimina una varible de sesion, la indicada

        // $category_id = 1;
        // dd(Post::where('id', '>=', 1)->where(function ($query) use ($category_id) {$query->where('category_id', $category_id)->orWhere('posted', 'yes');})->toSql());

        $post = Post::paginate(2); // obtiene 2 registros (paginacion)

        // dd($post);

        return view('dashboard/post/index', compact('post'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $categories = Category::get();
        // dd($categories);

        // Devuelve un array 
        $categories = Category::pluck('id', 'title');
        // dd($categories);

        $post = new Post();

        return view('dashboard.post.create', compact('categories', 'post'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        // Hacen lo mismo
        // dd($request->all()['title']);
        // dd(request()->get('title'));

        // Si la validación no es satisfactoria redirige a la vista anterior

        // $request->validate([
        //     'title' => 'required|min:5|max:500',
        //     'slug' => 'required|min:5|max:500',
        //     'content' => 'required|min:10',
        //     'category_id' => 'required|integer',
        //     'description' => 'required|min:10',
        //     'posted' => 'required',

        // ]);

        // Otra forma de validar datos (no muy recomendable) se ejecuta el resto del codigo (no redirecciona)
        // $validated = Validator::make($request->all(),
        // [
        //     'title' => 'required|min:5|max:500',
        //     'slug' => 'required|min:5|max:500',
        //     'content' => 'required|min:10',
        //     'category_id' => 'required|integer',
        //     'description' => 'required|min:10',
        //     'posted' => 'required',
        // ]);

        // dd($validated->fails()); //true = falló la validación

        // Manejar errores mediante una clase y registra
        // Si un campo de datos registrado no se manda, no pasará la validación
        Post::create($request->validated()); //Este metodo implementa más segurudad

        // Post::create(
        //     [
        //         'title' => $request->all()['title'],
        //         'slug' => $request->all()['slug'],
        //         'content' => $request->all()['content'],
        //         'category_id' => $request->all()['category_id'],
        //         'description' => $request->all()['description'],
        //         'posted' => $request->all()['posted'],
        //         // 'image' => $request->all()['image']
        //     ]
        // );

        // Es igual al Post:create con todos sus elementos declarados (ejemplo de arriba)
        // Post::create($request->all());

        return to_route('post.index')->with('status', 'Post create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        // dd($post->image);
        return view('dashboard/post/show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
        $categories = Category::pluck('id', 'title');
        // dd($post);
        return view('dashboard.post.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Post $post)
    {
        // dd(public_path('posts/upload')); // "C:\Users\emman\Herd\PrimerProyecto\public\posts/upload"

        // Valida datos
        $data = $request->validated();

        //image
        if(isset($data['image'])){
            $data['image'] = $filename = time().'.'.$data['image']->extension();
            
            // dd($data['image']);

            // dd($request, $data);
            $request->image->move(public_path('upload/posts'), $filename);
        }
        
        $post->update($data);

        return to_route('post.index')->with('status', 'Post edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return to_route('post.index')->with('status', 'Post deleted');
    }
}
