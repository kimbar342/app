<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\UserController;
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
// page site
Route::get('/', [SiteController::class , 'home']);
Route::get('/home', [SiteController::class, 'home']);
Route::get('/about', [SiteController::class , 'about']);
Route::get('/profile', [SiteController::class, 'profile']);

//user controller
Route::get('/user/{id}', [UserController::class, 'user_add']);
Route::get('/user/del', [UserController::class, 'user_del']);
Route::get('/user/update', [UserController::class, 'user_update']);
Route::get('/user/create', [UserController::class, 'user_create']);

//topic controller
Route::get('/topic', [TopicController::class, 'topic']);
Route::get('/topic/{id}', [TopicController::class, 'topic_id']);
Route::get('/topic/add', [TopicController::class, 'topic_add']);

//post controller
Route::get('/post', [PostController::class, 'post_all']);
Route::get('/post/add', [PostController::class, 'post_add']);
