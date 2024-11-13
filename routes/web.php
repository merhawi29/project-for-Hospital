<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\adminController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'redirect']);


Route::get('/dashboard', [HomeController::class, 'dash'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/add_view_doctor', [adminController::class, 'addview'])->middleware(['auth']);
Route::post('/upload_doctor', [adminController::class, 'upload']);
Route::post('/appointment', [HomeController::class, 'appointment'])->middleware(['auth']);
Route::get('/myappointment', [HomeController::class, 'myappointment']);
Route::get('/cancle/{id}', [HomeController::class, 'cancle']);
Route::get('/showappointment', [adminController::class, 'showappointment'])->middleware(['auth']);
Route::get('/Approved/{id}', [adminController::class, 'Approved']);
Route::get('/cancle/{id}', [adminController::class, 'cancle']);
Route::get('/Alldoctor', [adminController::class, 'Alldoctor'])->middleware(['auth']);
Route::get('/Deletedoctor/{id}', [adminController::class, 'Deletedoctor']);
Route::get('/Updatedoctor/{id}', [adminController::class, 'Updatedoctor']);
Route::post('/edit_doctor/{id}', [adminController::class, 'edit_doctor']);


