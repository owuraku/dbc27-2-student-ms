<?php

use App\Http\Controllers\StudentController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::group('/students', function(){
    Route::get('', [StudentController::class, 'index']);
    Route::get('/create', [StudentController::class, 'create']);
    Route::post('/create', [StudentController::class, 'store'])->name('student.create');
    Route::get('/edit/{id}', [StudentController::class, 'edit']);
    Route::get('/{id}', [StudentController::class, 'show']);
    Route::patch('/{id}', [StudentController::class, 'update'])->name('student.update');
    Route::delete('/{id}', [StudentController::class, 'destroy'])->name('student.delete');
});


require __DIR__.'/auth.php';
