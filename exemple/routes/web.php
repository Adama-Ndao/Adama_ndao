<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategorieController;

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

Route::get('/produit', [ProduitController::class, 'produit'])->name('produit');
Route::get('/ajout', [ProduitController::class, 'ajout'])->name('ajout');
Route::post('/store', [ProduitController::class, 'store'])->name('store');
Route::get('/delete/{id}', [ProduitController::class, 'delete'])->name('delete');
Route::get('/edit/{id}', [ProduitController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [ProduitController::class, 'update'])->name('update');

Route::get('/categorie', [CategorieController::class, 'categorie'])->name('categorie');
Route::get('/ajouter', [CategorieController::class, 'ajouter'])->name('ajouter');
Route::post('/stored', [CategorieController::class, 'stored'])->name('stored');