<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\CanvasUiController;
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

Route::get('/', [BlogsController::class, 'getPosts']);
Route::get('posts/{slug}', [BlogsController::class, 'getPost'])->name('posts.getPost');


Route::prefix('canvas-ui')->group(function () {
    Route::prefix('api')->group(function () {
        Route::get('posts', [CanvasUiController::class, 'getPosts']);
        Route::get('posts/{slug}', [CanvasUiController::class, 'showPost'])
             ->middleware('Canvas\Http\Middleware\Session');

        Route::get('tags', [CanvasUiController::class, 'getTags']);
        Route::get('tags/{slug}', [CanvasUiController::class, 'showTag']);
        Route::get('tags/{slug}/posts', [CanvasUiController::class, 'getPostsForTag']);

        Route::get('topics', [CanvasUiController::class, 'getTopics']);
        Route::get('topics/{slug}', [CanvasUiController::class, 'showTopic']);
        Route::get('topics/{slug}/posts', [CanvasUiController::class, 'getPostsForTopic']);

        Route::get('users/{id}', [CanvasUiController::class, 'showUser']);
        Route::get('users/{id}/posts', [CanvasUiController::class, 'getPostsForUser']);
    });
});

Route::get('old/{view?}', [CanvasUiController::class, 'index'])
    ->where('view', '(.*)')
    ->name('canvas-ui');
