<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
Route::get('/', [PostController::class, 'index']);
    //La route écoute la home page
    
Route::get('/introduction/{id}', [PostController::class, 'show']);

Route::get('/techniques', [PostController::class, 'content']);

Route::get('contact', [PostController::class, 'form']);



