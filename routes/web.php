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
    Route::post('/student/create', [App\Http\Controllers\Admin\Students::class, 'create'])->name('createStudent');

    Route::get('/subjects', [App\Http\Controllers\Admin\Subjects::class, 'index'])->name('subjects');
    Route::get('/subject/edit/{id}', [App\Http\Controllers\Admin\Subjects::class, 'editAction']);
    Route::get('/subject/add', [App\Http\Controllers\Admin\Subjects::class, 'addAction'])->name('addSubject');

    Route::get('/grades', [App\Http\Controllers\Admin\Grades::class, 'index']);
    Route::get('/first_grading', [App\Http\Controllers\Admin\Grades::class, 'first']);
    Route::get('/second_grading', [App\Http\Controllers\Admin\Grades::class, 'second']);
    Route::get('/third_grading', [App\Http\Controllers\Admin\Grades::class, 'third']);
    Route::get('/fourth_grading', [App\Http\Controllers\Admin\Grades::class, 'fourth']);

    Route::get('/ranking_first_grading', [App\Http\Controllers\Admin\Ranking::class, 'first']);
    Route::get('/ranking_second_grading', [App\Http\Controllers\Admin\Ranking::class, 'second']);
    Route::get('/ranking_third_grading', [App\Http\Controllers\Admin\Ranking::class, 'third']);
    Route::get('/ranking_fourth_grading', [App\Http\Controllers\Admin\Ranking::class, 'fourth']);
    Route::get('/ranking_end', [App\Http\Controllers\Admin\Ranking::class, 'end']);

    Route::get('/accounts', [App\Http\Controllers\Admin\Accounts::class, 'index']);

    Route::get('/school_year', [App\Http\Controllers\Admin\SchoolYear::class, 'index']);

    Route::get('/class', [App\Http\Controllers\Admin\Classes::class, 'index']);
});

Route::group(['middleware' => 'App\Http\Middleware\Teacher', 'prefix' => 'teacher'], function()
{
    Route::get('/grades', [App\Http\Controllers\Teacher\Grades::class, 'index']);
    Route::get('/ratings', [App\Http\Controllers\Teacher\Grades::class, 'ratings']);
});

