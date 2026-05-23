<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    //
    function index(){

        // return view(contact)

        return view('contact2', ['name' => 'Juan']);

        // echo "Hola mundo";

    }

    // Mismo nombre argumentos metodo y varibles enviadas (buenas prácticas)
    function otro($post, $otro=50){
        echo "Hola mundo desde funcion otro() </br>";
        echo $post . " - " . $otro;
    }

    function index2(){
        $post = ['post1', 'post2'];

        // return view('contact2', ['post' => $post, 'categorias' => $caetgorias]);
        // ['post' => $post, 'categorias' => $caetgorias]; == compact('post', 'categorias')
        return view('contact3', compact('post'));

        


    }
}
