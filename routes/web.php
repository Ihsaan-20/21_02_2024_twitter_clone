<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\IdeaController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IdeaController::class, 'index'])->name('idea.index');

Route::middleware(['auth'])->group(function () {    
    Route::post('/idea', [IdeaController::class, 'store'])->name('idea.store');
    Route::get('/idea/{idea}', [IdeaController::class, 'show'])->name('idea.show');
    Route::get('/idea/{idea}/edit', [IdeaController::class, 'edit'])->name('idea.edit');
    Route::put('/idea/{idea}', [IdeaController::class, 'update'])->name('idea.update');
    Route::delete('/idea/{idea}', [IdeaController::class, 'destroy'])->name('idea.destroy');
    Route::post('/idea/{idea}/comment', [CommentController::class, 'store'])->name('idea.comment.store');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});





Route::get('/login', [AuthController::class, 'loginForm'])->name('login');//view
Route::get('/register', [AuthController::class, 'registerForm'])->name('idea.create.new');//view

Route::post('/registe', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
