<?php

use App\Http\Controllers\LayoutController;
use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/login",[LayoutController::class,"login"])->name("users.login");
Route::get("/index",[LayoutController::class,"index"])->name("users.index");
Route::get("/products/item",[LayoutController::class,"item"])->name("users.item");
Route::post("/products/store",[LayoutController::class,"store"])->name("users.store");


Route::post("items/create",[ProductController::class,"store"])->name("products.store");

Route::get("items/{id}/more",[ProductController::class,"more"]);
Route::get("items/userview",[ProductController::class,"userview"]);
Route::get("items/{id}/delete",[ProductController::class,"delete"]);
Route::get("items/{id}/editpage",[ProductController::class,"editpage"]);
Route::post("items/{id}/edit",[ProductController::class,"edit"]);