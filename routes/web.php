<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController; // Add this line


Route::get('/', function () {
    return view('welcome');
    
});

Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
