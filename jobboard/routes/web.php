<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Jobs\JobsController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/jobs/single/{id}', [App\Http\Controllers\Jobs\JobsController::class, 'single'])->name('single.job');
Route::post('/jobs/save', [App\Http\Controllers\Jobs\JobsController::class, 'saveJob'])->name('save.job');
Route::post('/jobs/apply', [App\Http\Controllers\Jobs\JobsController::class, 'jobApply'])->name('apply.job');

Route::get('/categories/single/{name}', [App\Http\Controllers\Categories\CategoriesController::class, 'singleCategory'])->name('categories.single');
