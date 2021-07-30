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

use \App\Http\Controllers\ArticlesController;

//文章列表改作為首頁
// Route::get("/", [ArticlesController::class, index]);
//多給它指定一個別名 root
Route::get("/", [ArticlesController::class, 'index'])->name('root');

//自動作出 `articles` 這個路徑名稱的 7 個路徑對照表
// Route::resource('articles', \App\Http\Controllers\ArticlesController::class);
Route::resource('articles', ArticlesController::class);
//==========================================
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');