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

Route::get('/', function () {
    return view('welcome');
});
   
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/post-team', [App\Http\Controllers\teamController::class, 'addTeam'])->name('add.team');
Route::post('/post-team', [App\Http\Controllers\teamController::class, 'saveTeam'])->name('save.team');
Route::get('/team', [App\Http\Controllers\teamController::class, 'team'])->name('team');
Route::get('/edit-team/{id}', [App\Http\Controllers\teamController::class, 'editTeam'])->name('edit.team');
Route::get('/delete-team/{id}', [App\Http\Controllers\teamController::class, 'deleteTeam'])->name('delete.team');
Route::post('/update-team', [App\Http\Controllers\teamController::class, 'updateTeam'])->name('update.team');
Route::get('/viewMember/{id}', [App\Http\Controllers\teamController::class, 'viewMember'])->name('viewMember');