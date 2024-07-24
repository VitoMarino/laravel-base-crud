<?php

use App\Http\Controllers\Admin\PageController as PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/', [PageController::class, 'index']);
Route::post('/animal', [PageController::class, 'store'])->name('animal.store');
Route::get('/animal/create', [PageController::class, 'create']);
Route::get('/animal/{animal}', [PageController::class, 'show'])->name('animal.show');
*/

Route::resource('/animal', PageController::class);
