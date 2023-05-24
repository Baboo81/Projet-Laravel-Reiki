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
Route::get('/home', function(){
    return view('home', ['framework' => 'Laravel']);
});

//Basic
Route::get('/test', function(){
    return 'test';
});

//Default: retourner une vue
Route::get('/', function () {
    return view('welcome');
});
