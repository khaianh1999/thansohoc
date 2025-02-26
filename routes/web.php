<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NumberMainController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/numbermain',[NumberMainController::class, 'index'])->name('numbermain.index');
Route::get('/numbermain/create', [NumberMainController::class, 'create'])->name('numbermain.create');
Route::post('/numbermain/store', [NumberMainController::class, 'store'])->name('numbermain.store');
Route::get('/numbermain/show', [NumberMainController::class, 'show'])->name('numbermain.show');
Route::get('/numbermain/{id}/edit', [NumberMainController::class, 'edit'])->name('numbermain.edit');
Route::put('/numbermain/{id}', [NumberMainController::class, 'update'])->name('numbermain.update');

Route::delete('/numbermain/destroy/{id}', [NumberMainController::class, 'destroy'])->name('numbermain.destroy');