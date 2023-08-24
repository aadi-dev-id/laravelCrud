<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', [ProductController::class,"index"]);
Route::get('/add', [ProductController::class,"add"])->name("new");
Route::post('/add', [ProductController::class,"saveProduct"]);
Route::get('/status/{id}/{type}', [ProductController::class,"updateStaus"]);
