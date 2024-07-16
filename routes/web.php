<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;

// PUBLIC ROUTES
Route::get('/', function (Request $request) {
    return view('home');
});

// ADMIN ROUTES: DASHBOARD
Route::get('/admin/dashboard', [PostController::class, 'index'])->name('admin.dashboard');

// ADMIN ROUTES: POSTS
Route::get('/admin/post/create', [PostController::class, 'create'])->name('admin.post.create');
Route::get('/admin/post/details', [PostController::class, 'detail'])->name('admin.post.detail');
Route::post('/admin/post/store', [PostController::class, 'store'])->name('admin.post.store');
Route::get('/admin/post/{id}', [PostController::class, 'show'])->name('admin.post.show');
Route::get('/admin/post/{id}/edit', [PostController::class, 'edit'])->name('admin.post.edit');
Route::put('/admin/post/{id}', [PostController::class, 'update'])->name('admin.post.update');
Route::delete('/admin/post/{id}', [PostController::class, 'destroy'])->name('admin.post.destroy');

// ADMIN ROUTES: USERS
Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
Route::get('/admin/user/create', [UserController::class, 'create'])->name('admin.user.create');
Route::get('/admin/user/details', [UserController::class, 'detail'])->name('admin.user.detail');
Route::post('/admin/user/store', [UserController::class, 'store'])->name('admin.user.store');
Route::get('/admin/user/{id}', [UserController::class, 'show'])->name('admin.user.show');
Route::get('/admin/user/{id}/edit', [UserController::class, 'edit'])->name('admin.user.edit');
Route::put('/admin/user/{id}', [UserController::class, 'update'])->name('admin.user.update');
Route::delete('/admin/user/{id}', [UserController::class, 'destroy'])->name('admin.user.destroy');

// ADMIN ROUTES: CATEGORIES
Route::get('/admin/categories', [CategoryController::class, 'index'])->name('admin.category.index');
Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
Route::get('/admin/category/details', [CategoryController::class, 'detail'])->name('admin.category.detail');
Route::post('/admin/category/store', [CategoryController::class, 'store'])->name('admin.category.store');
Route::get('/admin/category/{id}', [CategoryController::class, 'show'])->name('admin.category.show');
Route::get('/admin/category/{id}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
Route::put('/admin/category/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
Route::delete('/admin/category/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');