<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
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


// フォーム入力ページの表示
Route::get('/', [ContactController::class, 'showForm'])->name('form');

// 確認画面の表示（フォームからのPOSTリクエストのみ受け付ける）
Route::post('/contacts/confirm', [ContactController::class, 'confirm'])->name('contacts.confirm');

// 修正用ページにリダイレクト (GETリクエスト)
Route::get('/edit', [ContactController::class, 'edit'])->name('edit');

// フォーム送信処理 (POSTリクエスト)
Route::post('/submit', [ContactController::class, 'submit'])->name('submit');

// 完了ページの表示
Route::get('/thanks', function () {
    return view('thanks');
})->name('thanks');

// お問い合わせ一覧表示（GETリクエスト）
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

// お問い合わせ詳細表示（GETリクエスト）
Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('contacts.show');

// お問い合わせのデータ保存
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');

// カテゴリ一覧表示（カテゴリごとにお問い合わせをフィルタリングするなど）
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

// 特定カテゴリに属するお問い合わせの一覧表示
Route::get('/categories/{id}/contacts', [CategoryController::class, 'showContactsByCategory'])->name('categories.contacts');

// 登録フォームの表示
Route::get('/register', [CategoryController::class, 'showRegistrationForm'])->name('register');

// 登録処理
Route::post('/register', [CategoryController::class, 'register'])->name('register.submit');

// ログインフォームの表示
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');

// ログイン処理
Route::post('/login', [UserController::class, 'login'])->name('login.submit');
