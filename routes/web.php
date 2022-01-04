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

Route::get('/', function () {
    return view('view');
});


Route::get('/create', function(){
    return view('create');
})->name('create');

Route::get('/edit', function(){
    return view('edit');
})->name('edit');

// Route::get('/ingresoChocolateProd', [ChocolateProducido::class,'ingresoChocolateProd'])->name('ingresoChocolateProd');
Route::post('/newGame', [ProductController::class,'newGame'])->name('newGame');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
