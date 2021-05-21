<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('admin.show');
// });

// User
Route::get('/', [HomeController::class,'index']);

Route::get('/login', [UserController::class,'index']);
Route::post('/login', [UserController::class,'indexHandle']);

// register
Route::get('/register', [UserController::class,'register']);
Route::post('/register', [UserController::class,'registerHandle']);


Route::get('/admin', [PostController::class,'index']);


Route::get('admin/create', [PostController::class,'create']);
Route::post('admin/store', [PostController::class,'store']);


// notes: cari tau tentang "patch()"
Route::get('admin/{post:slug}/edit', [PostController::class,'edit']);
Route::patch('admin/{post:slug}/edit', [PostController::class,'update']);

Route::get('admin/{slug}/hapus', [PostController::class,'destroy'])->name('post.hapus');

Route::get('admin/{post:slug}', [PostController::class,'show']);
