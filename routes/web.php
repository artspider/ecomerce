<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoesController;
use App\Models\Shoe;

Route::get('/', function () {
    $shoes = Shoe::all();
    return view('welcome',['shoes' => $shoes]);
});

/* Route::('/', HomeController::class); */

/* Route::get('/shoes', function () {
    $shoes = Shoe::all();
    return view('shoes',['shoes' => $shoes]);
}); */

Route::get('/shoes', [ShoesController::class, 'index'])->name('index');

Route::get('/shoes/create', [ShoesController::class, 'create']);

Route::post('/shoes', [ShoesController::class, 'store']);

Route::get('/shoes/{id}', [ShoesController::class, 'show'])->name('show');

Route::delete('/shoes/{shoe}', [ShoesController::class, 'destroy'])->name('destroy');

Route::get('/shoes/{id}/edit', [ShoesController::class, 'edit'])->name('edit');

Route::put('/shoes/{shoe}', [ShoesController::class, 'update'])->name('update');

/* 
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
 */