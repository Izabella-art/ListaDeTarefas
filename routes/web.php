<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/test', [UserController::class, 'test']);

// agenda
Route::get('agenda/index', [CalendarController::class, 'index'])->name('agenda.index');
Route::post('agenda', [CalendarController::class, 'store'])->name('agenda.store');
Route::patch('agenda/update/{id}', [CalendarController::class, 'update'])->name('agenda.update');
Route::delete('agenda/destroy/{id}', [CalendarController::class, 'destroy'])->name('agenda.destroy');

// usuario 
Route::get('agenda/index', [CalendarController::class, 'index'])->name('agenda.index');
Route::post('agenda', [CalendarController::class, 'store'])->name('agenda.store');
Route::patch('agenda/update/{id}', [CalendarController::class, 'update'])->name('agenda.update');
Route::delete('agenda/destroy/{id}', [CalendarController::class, 'destroy'])->name('agenda.destroy');

Route::get('books', [BookController::class, 'index'])->name('books.index');
Route::post('books', [BookController::class, 'store'])->name('books.store');

Route::get('/export-db', function() {
    return "Exporting";
});