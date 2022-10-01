<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PermissionController;

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

Route::middleware(['admin'])->group(function () {
    
    Route::get('/usuarios', [UserController::class, 'index'])->name('users');

    Route::get('/usuarios/permissoes/{id}', [PermissionController::class, 'edit'])->name('edit_permissions');

    Route::post('/usuarios/permissoes/{id}', [PermissionController::class, 'update'])->name('edit_permissions_post');

    Route::get('/usuarios/editar/{id}', [UserController::class, 'edit'])->name('edit_user');

    Route::post('/usuarios/editar/{id}', [UserController::class, 'update'])->name('edit_user_post');

    Route::get('/usuarios/deletar/{id}', [UserController::class, 'destroy'])->name('delete_user');

});

Route::middleware(['user'])->group(function () {
    Route::get('/arquivos', [FileController::class, 'index'])->name('files');
    
    Route::get('/cursos', [CourseController::class, 'index'])->name('courses');
    
    Route::get('/categorias', [CategoryController::class, 'index'])->name('categories');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
