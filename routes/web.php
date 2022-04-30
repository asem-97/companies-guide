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

// Route::get('/', function () {
//     return view('layouts.base');
// });

// Route::get('/categories', function () {
//     return view('front.control');
// })->name('control');
Route::middleware(['auth'])->group(function(){


Route::get('/', [App\Http\Controllers\CompanyController::class, 'first'])->name('index');

//Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('control');


Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [App\Http\Controllers\CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{category}/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->name('categories.edit');
Route::patch('/categories/{category}/update', [App\Http\Controllers\CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{category}/destroy', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('categories.destroy');


Route::get('/category/{category}/companies', [App\Http\Controllers\CompanyController::class, 'index'])->name('companies.index');
Route::get('/category/{category}/companies/create', [App\Http\Controllers\CompanyController::class, 'create'])->name('companies.create');
Route::post('/category/{category}/companies', [App\Http\Controllers\CompanyController::class, 'store'])->name('companies.store');
Route::get('/category/companies/edit/{company}', [App\Http\Controllers\CompanyController::class, 'edit'])->name('companies.edit');
Route::delete('/category/companies/destroy/{company}', [App\Http\Controllers\CompanyController::class, 'destroy'])->name('companies.destroy');
Route::patch('/category/companies/update/{company}', [App\Http\Controllers\CompanyController::class, 'update'])->name('companies.update');
Route::get('/category/companies/{company}', [App\Http\Controllers\CompanyController::class, 'show'])->name('companies.show');
Route::get('/category/companies/{company}/download', [App\Http\Controllers\CompanyController::class, 'download'])->name('companies.download');



Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
Route::get('/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
Route::patch('/users/{user}/update', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}/destroy', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');


Route::get('/subcategories', [App\Http\Controllers\CategoryController::class, 'index'])->name('subcategories.index');



// Route::get('/category/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('subcategories.create');
// Route::post('/subcategories', [App\Http\Controllers\CategoryController::class, 'store'])->name('subcategories.store');
// Route::get('/subcategories/{category}/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->name('subcategories.edit');
// Route::patch('/subcategories/{category}/update', [App\Http\Controllers\CategoryController::class, 'update'])->name('subcategories.update');
// Route::delete('/subcategories/{category}/destroy', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('subcategories.destroy');

});
