<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\PageController;

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

Route::get('/{name}', [PageController::class, 'index'])->name('home');

// contactpagina
Route::get('/contact', [ContactUsFormController::class, 'createForm'])->name('contact');
Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');

Route::get('/dashboard', function () {
    return view('app');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


