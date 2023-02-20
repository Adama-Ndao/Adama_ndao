<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtuController;
use App\Http\Controllers\CourController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EtudiantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saidou', [PostController::class, 'saidou']);
Route::get('/liste', [EtudiantController::class, 'liste'])->name('liste.etudiant');
Route::post('/store', [EtudiantController::class, 'store'])->name('store.etudiant');
Route::get('/ajout', [EtudiantController::class, 'ajout'])->name('ajout.etudiant');
Route::get('/delete/{id}', [EtudiantController::class, 'delete'])->name('delete.etudiant');
Route::get('/edit/{id}', [EtudiantController::class, 'edit'])->name('edit.etudiant');
Route::post('/update/{id}', [EtudiantController::class, 'update'])->name('update.etudiant');
Route::get('/cours', [CourController::class, 'cours']);


   