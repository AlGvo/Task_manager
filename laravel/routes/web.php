<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [\App\Http\Controllers\HomePageController::class, 'view'])->name('home.page');

Route::prefix('/users')->group(function () {
    Route::post('/{data}/registration', [\App\Http\Controllers\UsersController::class, 'registration'])
        ->name('users.registration');
    Route::post('/{username}/{password}/authorization', [\App\Http\Controllers\UsersController::class, 'authorization'])
        ->name('users.authorization');
    Route::get('/{id}/view', [\App\Http\Controllers\UsersController::class, 'view'])
        ->name('users.view')
        ->where('id', '\d+');
    Route::delete('/{id}/delete', [\App\Http\Controllers\UsersController::class, 'delete'])
        ->name('users.delete')
        ->where('id', '\d+');
});

Route::resource('tasks', \App\Http\Controllers\TasksController::class);


