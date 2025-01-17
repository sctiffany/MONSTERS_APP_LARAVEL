<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PagesController;
use \App\Http\Controllers\MonstersController;

// UPDATE
Route::get('monsters/{monster}/edit', [MonstersController::class, 'edit'])->name('monsters.edit');
Route::put('/monsters/{monster}', [MonstersController::class, 'update'])->name('monsters.update');

// CREER ET INSERER
Route::get('/monsters/create', [MonstersController::class, 'create'])->name('monsters.create');
Route::post('/monsters', [MonstersController::class, 'store'])->name('monsters.store');

// DELETE
Route::delete('/monsters/{monster}', [MonstersController::class, 'destroy'])->name('monsters.destroy');

// ROUTES DE BASE
Route::get('/monsters', [MonstersController::class, 'index'])->name('monsters.index');
Route::get('/monsters/{id}/{slug}', [MonstersController::class, 'show'])->name('monsters.show');

// PAGE ACCUEIL
Route::get('/', [PagesController::class, 'home'])->name('pages.home');
