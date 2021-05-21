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

// Route::get('/', function () {
//     return view('admin.show');
// });

Route::get('/', [PostController::class,'index']);


Route::get('admin/create', [PostController::class,'create']);
Route::post('admin/store', [PostController::class,'store']);


// notes: cari tau tentang "patch()"
Route::get('admin/{post:slug}/edit', [PostController::class,'edit']);
Route::patch('admin/{post:slug}/edit', [PostController::class,'update']);

Route::get('admin/{post:slug}', [PostController::class,'show']);
