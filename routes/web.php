<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

// 顯示所有文章
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
// 創建文章頁面
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
// 創建文章
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
// 顯示文章
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
// 編輯文章
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
// 更新文章
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
// 刪除文章
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');