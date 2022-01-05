<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', [ProductController::class, 'viewGames'])->middleware(['auth'])->name('viewGames');

Route::get('/create', function () {
    return view('create');
})->name('create');

Route::get('/edit/{id}', [ProductController::class, 'editGame'])->name('editGame');
Route::post('/changeGame', [ProductController::class, 'changeGame'])->name('changeGame');

Route::get('/delete/{id}', [ProductController::class, 'deleteGame'])->name('deleteGame');

Route::post('/newGame', [ProductController::class, 'newGame'])->name('newGame');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
