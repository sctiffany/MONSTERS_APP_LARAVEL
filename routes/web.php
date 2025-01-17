<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PagesController;
use \App\Http\Controllers\MonstersController;


Route::get('/', [PagesController::class, 'home'])->name('pages.home');

Route::get('/monsters', [MonstersController::class, 'index'])->name('monsters.index');

Route::get('/monsters/{id}/{slug}', [MonstersController::class, 'show'])->name('monsters.show');

Route::get('/monsters/create', [MonstersController::class, 'create'])->name('monsters.create');

Route::post('/monsters', [MonstersController::class, 'store'])->name('monsters.store');

Route::delete('/monsters/{monster}', [MonstersController::class, 'destroy'])->name('monsters.destroy');
