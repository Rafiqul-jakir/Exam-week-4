<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', [ContactController::class, 'index'])->name('contacts.index');

Route::resource('contacts', ContactController::class);
Route::get('contacts/{id}', [ContactController::class, 'show'])->name('contacts.show');
Route::delete('contacts/delete', [ContactController::class, 'destroy'])->name('contacts.destroy');
