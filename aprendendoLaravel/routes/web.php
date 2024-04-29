<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $nome = "Mateus";
    $idade = 21;

    return view('welcome', ['nome' => $nome, 'idade'=> $idade]);
});

