<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionCategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});


Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/question_categories', [QuestionCategoryController::class, 'index'])->name('question_categories.index');  
    Route::get('/question_categories/create', [QuestionCategoryController::class, 'create'])->name('question_categories.create');  
    Route::post('/question_categories', [QuestionCategoryController::class, 'store'])->name('question_categories.store');  
    Route::get('/question_categories/{id}/edit', [QuestionCategoryController::class, 'edit'])->name('question_categories.edit');  
    Route::patch('/question_categories/{id}', [QuestionCategoryController::class, 'update'])->name('question_categories.update');  
    Route::delete('/question_categories/{id}', [QuestionCategoryController::class, 'destroy'])->name('question_categories.destroy');  
});


require __DIR__.'/auth.php';

