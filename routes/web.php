<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\AdminPageController;


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

Route::get('/pages/{name}', [PageController::class, 'index'])->name('home');

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

route::get('admin/pages', [AdminPageController::class, 'index']);
route::get('admin/pages/create', [AdminPageController::class, 'create'])->name('pages');
route::post('admin/pages/create', [AdminPageController::class, 'store'])->name('pages.store');
route::get('admin/pages/show/{id}', [AdminPageController::class, 'show'])->name('pages.show');
route::get('admin/pages/edit/{id}', [AdminPageController::class, 'edit'])->name('pages.edit');
route::post('admin/pages/edit/{id}', [AdminPageController::class, 'update'])->name('pages.update');
route::post('admin/pages/{id}', [AdminPageController::class, 'delete'])->name('pages.delete');

route::resource('admin/articles', App\Http\Controllers\Admin\ArticleController::class);

Route::get('/dashboard', [ArticleController::class, 'index']
)->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


