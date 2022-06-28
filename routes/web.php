<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\Admin\ArticleController;


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

Route::get('/', function () {return view('app');});

// contactpagina
Route::get('/contact', [ContactUsFormController::class, 'createForm'])->name('contact');
Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');

route::get('admin/articles', [ArticleController::class, 'index']);
route::get('admin/articles/create', [ArticleController::class, 'create'])->name('create');
route::post('admin/articles/create', [ArticleController::class, 'store'])->name('create.store');
route::get('admin/articles/show/{id}', [ArticleController::class, 'show'])->name('article.show');
route::get('admin/articles/edit/{id}', [ArticleController::class, 'edit'])->name('article.edit');
route::post('admin/articles/edit/{id}', [ArticleController::class, 'update'])->name('article.update');
route::post('admin/articles/{id}', [ArticleController::class, 'delete'])->name('article.delete');

route::resource('admin/articles', App\Http\Controllers\Admin\ArticleController::class);

Route::get('/dashboard', [ArticleController::class, 'index']
)->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
