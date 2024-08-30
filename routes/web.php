<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

// 顯示所有文章的列表頁
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// 顯示創建新文章的表單頁面
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

// 提交創建新文章的表單
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

// 顯示單一文章的詳細內容
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

// 顯示編輯文章的表單頁面
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

// 提交編輯文章的表單
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');

// 刪除文章
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');