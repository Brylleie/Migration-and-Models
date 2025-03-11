<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); 
});

Route::get('/greet/{name}', function ($name) {
    return view('greet', ['name' => $name]);
});

// Add resource route for tasks
Route::resource('tasks', TaskController::class);