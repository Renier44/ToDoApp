<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/task', [TaskController::class, 'index'])->name('task.index');
Route::get('/task/create', [TaskController::class, 'create'])->name('task.create');
Route::post('/task', [TaskController::class, 'store'])->name('task.store'); // Define the route for storing tasks
