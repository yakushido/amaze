<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\EyelashController;

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

Route::get('/', [ShopController::class,'index']);

Route::get('/admin', [AdminController::class,'index'])->middleware(['auth'])->name('admin');
Route::post('/admin/store', [AdminController::class,'store'])->middleware(['auth'])->name('admin.store');

Route::get('/menu/men', [MenuController::class,'index_men']);
Route::get('/menu/women', [MenuController::class,'index_women']);

Route::get('/menu/women/eyelash', [EyelashController::class,'index']);

require __DIR__.'/auth.php';
