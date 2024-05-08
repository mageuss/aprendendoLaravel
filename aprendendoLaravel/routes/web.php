<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $nome = "Mateus";
    $idade = 21;
    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];

    return view('welcome', ['nome' => $nome, 'idade' => $idade, 'array' => $array]);
});

Route::get('/segundo', function (){
    
    $busca = request('search');

    return view('segundo', ['busca' => $busca]);
});

Route::get('/segundo/{id?}', function($id = null){
    return view('segundoId', ['id' => $id]);
});

// Route::get('/segundo/{id}', function($id){
//     return view('segundoId', ['id' => $id]);
// });