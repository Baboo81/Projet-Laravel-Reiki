<?php
/**
 * Routes de l'admin (prefix('adb')) = nom admin dashboard, permet de classer
 * les routes par nom pour une meilleur organisation.
 */

 Route::prefix ('adb')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('welcome');
    //La route écoute la home page, name sert à nommer les routes
    
    Route::get('/introduction', [AdminController::class, 'intro'])->name('introduction');

    Route::get('/techniques', [AdminController::class, 'tech'])->name('techniques');

    Route::get('/contact', [AdminController::class, 'form'])->name('contact');

    Route::get('/parametros/{param_1}/{param_2}/{param_3}', [AdminController::class, 'parametros'])->name('parametros');
 });