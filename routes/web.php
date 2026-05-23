<?php

use App\Http\Controllers\PrimerControlador;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/test', function (){
    return "Welcom";
});

// route::get('/test', function (){
//     return "Welcom 2";
// });

route::get('/test1', function (){
    return view('test1');
});

route::get('/crudy', function (){

    $name = "Luis";
    $age = 33;
    $data = ['name' => $name, 'age' => $age];

    return view('crud/index', $data);
})->name('crud');

Route::get('/contact1', function () {
    // return redirect('/contact2'); //Ruta
    // return redirect()->route('contact2'); //Name
    // return to_route('contact2');

    $data1 = ['dato1' => '3', 'dato2' => '6'];
    return view('contact1', $data1);
});

// Route::get('/contact2', function () {
//     return view('contact2', ['name' => 'Juan']);
// })->name('contact2');


Route::get("/contact2", [PrimerControlador::class, 'index']);

// // CREA CRUD (post, put, patch, delete)
Route::resource("post", PrimerControlador::class);

Route::get("test2/{post}/{otro?}", [PrimerControlador::class, 'otro']); //{otro?}  Valor opcional

Route::get("/contact3", [PrimerControlador::class, 'index2']);





