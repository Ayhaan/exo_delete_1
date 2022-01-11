<?php

use App\Http\Controllers\FemmeController;
use App\Http\Controllers\HommeController;
use App\Http\Controllers\MembreController;
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

//FRONT
Route::get('/', function () {
    return view('home');
})->name("home");

//BACK
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
}) ->name('admin');

    //crud -> read
Route::get('/admin/membre', [MembreController::class, "index"])->name('membre.index');
    //crud -> create
Route::get('/admin/membre/create', [MembreController::class, "create"])->name('membre.create');
Route::post('/admin/membre/store', [MembreController::class, "store"])->name('membre.store');
    //crud -> delete
Route::delete('/admin/membre/{membre}/delete', [MembreController::class, "destroy"])->name('membre.destroy');

// page deriver de membre
Route::get('/admin/membre/femme', [FemmeController::class, "index"])->name("femme.index");
Route::get('/admin/membre/homme', [HommeController::class, "index"])->name("homme.index");