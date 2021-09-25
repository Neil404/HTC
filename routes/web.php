<?php

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
    // return view('welcome');
    return redirect('/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'App\Http\Middleware\Admin', 'prefix' => 'admin'], function()
{
    Route::get('/dashboard', [App\Http\Controllers\Admin\Dashboard::class, 'index']);

    Route::get('/students', [App\Http\Controllers\Admin\Students::class, 'index'])->name('students');
    Route::get('/student/edit/{id}', [App\Http\Controllers\Admin\Students::class, 'editAction'])->name('editStudent');
    Route::get('/student/add', [App\Http\Controllers\Admin\Students::class, 'addAction'])->name('addStudent');

    Route::get('/subjects', [App\Http\Controllers\Admin\Subjects::class, 'index'])->name('subjects');
    Route::get('/subject/edit/{id}', [App\Http\Controllers\Admin\Subjects::class, 'editAction']);
    Route::get('/subject/add', [App\Http\Controllers\Admin\Subjects::class, 'addAction'])->name('addSubject');
});

Route::group(['middleware' => 'App\Http\Middleware\Teacher'], function()
{
    // Route::get('/students', [App\Http\Controllers\Admin\Students::class, 'index'])->name('students');
});

