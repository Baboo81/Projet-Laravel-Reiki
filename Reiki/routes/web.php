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
Route::get('/', [PostController::class, 'index'])->name('welcome');
    //La route écoute la home page, name sert à nommer les routes
    
Route::get('/introduction', [PostController::class, 'intro'])->name('introduction');

Route::get('/techniques', [PostController::class, 'tech'])->name('techniques');

Route::get('/contact', [PostController::class, 'form'])->name('contact');

Route::get('/parametros/{param_1}/{param_2}/{param_3}', [PostController::class, 'parametros'])->name('parametros');



