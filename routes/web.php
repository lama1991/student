<?php

<<<<<<< HEAD
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
=======
use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;
>>>>>>> 20f302eee33abdc8b8360dc3ad6ec07bc829e864

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
<<<<<<< HEAD
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('students',StudentController::class);
=======
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/',[studentController::class,'index']);
//Route::delete('/{id}', [studentController::class, 'destroy'])->name('destroy');
// Route::get('/showstudent/{id}', [studentController::class, 'show'])->name('show');
Route::resource('/students',studentController::class);
>>>>>>> 20f302eee33abdc8b8360dc3ad6ec07bc829e864

