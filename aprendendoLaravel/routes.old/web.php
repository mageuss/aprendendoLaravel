<?php
use App\Http\Controllers\PrimeiroController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrimeiroController::class, 'index']);
Route::get('/', [PrimeiroController::class, 'index']);


Route::get('/segundo', function () {

    $busca = request('search');

    return view('segundo', ['busca' => $busca]);
});

Route::get('/segundo/{id?}', function ($id = null) {
    return view('segundoId', ['id' => $id]);
});

// Route::get('/segundo/{id}', function($id){
//     return view('segundoId', ['id' => $id]);
// });