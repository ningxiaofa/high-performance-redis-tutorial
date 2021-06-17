<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('welcome');
});

// Test connector of Redis
Route::get('/connection', function () {
    dd(\Illuminate\Support\Facades\Redis::connection());
    // 或者
    dd(app('redis')->connection());
    // 或者
    dd(app('redis.connection'));
});

// Acquire total visits of site
Route::get('/site_visits', function () {
    return '网站全局访问量：' . \Illuminate\Support\Facades\Redis::get('site_total_visits');
});

// View post and Get the ranking of article views
Route::get('/posts/{post}', [PostController::class, 'show']);
// Why can not access in browser, TBD?
Route::get('/posts/popular', [PostController::class, 'popular']);
// Can access normally
Route::get('/post/popular', [PostController::class, 'popular']);
