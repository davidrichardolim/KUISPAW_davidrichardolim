<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/fakultas', FakultasController::class);
Route::resource('/prodi', ProdiController::class);
// Route::get('/fakultas', function (){
//     return view('fakultas.list-fakultas');
// });

// Route::get('/fakultas/edit', function (){
//     return view('fakultas.edit-fakultas');
// });

// Route::get('/fakultas/show', function (){
//     return view('fakultas.detail-fakultas');
// });