<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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

Route::get("/home", [PostsController::class, "home"]);
Route::get("/articles_list", [PostsController::class, "articles_list"]);
Route::get("/edit/{id}", [PostsController::class, "edit"]);
Route::post("/edit/{id}", [PostsController::class, "updateRecord"]);
