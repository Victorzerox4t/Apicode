<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', [App\Http\Controllers\PostController::class, 'index'])->name('post.index');
Route::get('/post/add', [App\Http\Controllers\PostController::class, 'add'])->name('post.add');
Route::post('/post/store', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');

Route::get('/post/delete/{id}', [App\Http\Controllers\PostController::class, 'delete'])->name('post.delete');


Route::get('/post/ubah/{id}', [App\Http\Controllers\PostController::class, 'ubah'])->name('post.ubah');
Route::put('/post/update/{id}', [App\Http\Controllers\PostController::class, 'update'])->name('post.update');
