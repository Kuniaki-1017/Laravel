<?php

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



//ブログ一覧画面を表示
//Route::httpメソッド名（'エンドポイント', 実行したい関数）
//@showlist→BlogControlleのshowListメソッド
//->name('blogs')はRouteに名前をつけている
Route::get('/', 'BlogController@showList')->name('blogs');
