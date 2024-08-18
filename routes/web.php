<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\AdminController;
use  App\Http\Controllers\StudentController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

Route::get('admin/logout', [AdminController::class, 'Logout'])->name('admin.logout');


//Student routes
Route::prefix('student')->group(function(){
    Route::get('/view', [StudentController::class, 'View_Student'])->name('student.view');
    Route::post('/store', [StudentController::class, 'Store_Student'])->name('student.store');
    Route::post('/update/{id}', [StudentController::class, 'Update_Student'])->name('student.update');
    Route::get('/delete/{id}', [StudentController::class, 'Delete_Student'])->name('student.delete');
});