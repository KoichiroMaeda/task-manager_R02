<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

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

// 仮ルート（Chapter 6で本実装に置き換え）
// Route::middleware('auth')->group(function () {
//     Route::get('/tasks', fn() => 'タスク一覧（準備中）')->name('tasks.index');
//     Route::get('/categories', fn() => 'カテゴリー一覧（準備中）')->name('categories.index');
// });

// 認証が必要なルート
Route::middleware('auth')->group(function () {
    // カテゴリーのCRUDルート（仮ルートから置き換え）
    Route::resource('categories', CategoryController::class);

    // タスクの仮ルート（次のセクションで本実装に置き換え）
    Route::get('/tasks', fn() => 'タスク一覧（準備中）')->name('tasks.index');
});
