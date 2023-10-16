<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
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


Route::get('/newest',[MainController::class,'index'])->name('main.index');


Route::get('/main',[PostController::class,'index'])->name('post.index');
Route::get('/main/posts/create',[PostController::class,'create'])->name('post.create');

Route::post('/main/posts',[PostController::class,'store'])->name('post.store');
Route::get('/main/{post}',[PostController::class,'show'])->name('post.show');

Route::get('main/posts/update',[PostController::class,'update']);
Route::get('main/posts/delete',[PostController::class,'delete']);
