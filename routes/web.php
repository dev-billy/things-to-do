<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoItemController;

Route::get('/', [TodoItemController::class, 'index'])->middleware(['auth'])->name('home');

Route::get('/addItem', function () {
    return view('addItems');
})->middleware(['auth'])->name('addItems');

Route::post('/saveItem', [TodoItemController::class, 'saveItem'])->middleware(['auth'])->name('saveItem');

require __DIR__.'/auth.php';
