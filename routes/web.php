<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\PagesController::class, 'home'])->name('pages.home');

Route::get('/monsters', [\App\Http\Controllers\MonstersController::class, 'index'])->name('monsters.index');

Route::get('/monsters/{id}/{slug}', [\App\Http\Controllers\MonstersController::class, 'show'])->name('monsters.show');
