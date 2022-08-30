<?php

use App\Http\Controllers\CourseController;
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


Route::prefix('/students')->group( function(){
    Route::get('', [StudentController::class, 'index'])->name('student.index');
    Route::get('/create', [StudentController::class, 'create'])->name('student.add-form')->middleware('admin');
    Route::post('/create', [StudentController::class, 'store'])->name('student.create')->middleware('admin');
    Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('student.edit-form');
    Route::get('/{id}', [StudentController::class, 'show']);
    Route::patch('/{id}', [StudentController::class, 'update'])->name('student.update');
    Route::delete('/{id}', [StudentController::class, 'destroy'])->name('student.delete');
});

Route::prefix('/courses')->group( function(){
    Route::get('', [CourseController::class, 'index'])->name('course.index');
    Route::get('/create', [CourseController::class, 'create'])->name('course.add-form');
    Route::post('/create', [CourseController::class, 'store'])->name('course.create');
    Route::get('/edit/{id}', [CourseController::class, 'edit'])->name('course.edit-form');
    Route::get('/{id}', [CourseController::class, 'show'])->name('course.show');
    Route::patch('/{id}', [CourseController::class, 'update'])->name('course.update');
    Route::delete('/{id}', [CourseController::class, 'destroy'])->name('course.delete');
});


require __DIR__.'/auth.php';
