<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\EyelashController;
use App\Http\Controllers\DepilationController;
use App\Http\Controllers\EstheticController;
use App\Http\Controllers\WormwoodController;
use App\Http\Controllers\BridalController;
use App\Http\Controllers\NailController;
use App\Http\Controllers\CampaignController;

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
Route::post('/admin/delete/{id}', [AdminController::class, 'delete'])
    ->middleware(['auth'])
    ->name('admin.delete');

Route::get('/admin/shop', [ShopController::class,'admin_index'])->middleware(['auth'])->name('admin_shop');
Route::post('/admin/shop/store', [ShopController::class,'admin_store'])->middleware(['auth'])->name('admin_shop.store');
Route::post('/admin/shop/delete/{id}', [ShopController::class,'admin_delete'])->middleware(['auth'])->name('admin_shop.delete');

Route::get('/admin/eyelash', [EyelashController::class,'admin_index'])->middleware(['auth'])->name('admin_eyelash');
Route::post('/admin/eyelash/store', [EyelashController::class,'admin_store'])->middleware(['auth'])->name('admin_eyelash.store');
Route::get('/admin/eyelash/show/{id}/{genre_id}', [EyelashController::class,'admin_show'])->middleware(['auth'])->name('admin_eyelash.show');
Route::post('/admin/eyelash/delete/{id}/{genre_id}', [EyelashController::class,'admin_delete'])->middleware(['auth'])->name('admin_eyelash.delete');
Route::post('/admin/eyelash/update/{id}/{genre_id}', [EyelashController::class,'admin_update'])->middleware(['auth'])->name('admin_eyelash.update');

Route::get('/admin/depilation', [DepilationController::class,'admin_index'])->middleware(['auth'])->name('admin_depilation');
Route::post('/admin/depilation/store', [DepilationController::class,'admin_store'])->middleware(['auth'])->name('admin_depilation.store');
Route::get('/admin/depilation/show/{id}/{genre_id}', [DepilationController::class,'admin_show'])->middleware(['auth'])->name('admin_depilation.show');
Route::post('/admin/depilation/delete/{id}/{genre_id}', [DepilationController::class,'admin_delete'])->middleware(['auth'])->name('admin_depilation.delete');
Route::post('/admin/depilation/update/{id}/{genre_id}', [DepilationController::class,'admin_update'])->middleware(['auth'])->name('admin_depilation.update');

Route::get('/admin/depilation/partS/show/{id}', [DepilationController::class,'admin_part_s_show'])->middleware(['auth'])->name('admin_depilation_partS.show');
Route::post('/admin/depilation/partS/store', [DepilationController::class,'admin_part_s_store'])->middleware(['auth'])->name('admin_depilation_partS.store');
Route::get('/admin/depilation/partS/delete/{id}', [DepilationController::class,'admin_part_s_delete'])->middleware(['auth'])->name('admin_depilation_partS.delete');
Route::post('/admin/depilation/partS/update/{id}', [DepilationController::class,'admin_part_s_update'])->middleware(['auth'])->name('admin_depilation_partS.update');
Route::get('/admin/depilation/partL/show/{id}', [DepilationController::class,'admin_part_l_show'])->middleware(['auth'])->name('admin_depilation_partL.show');
Route::post('/admin/depilation/partL/store', [DepilationController::class,'admin_part_l_store'])->middleware(['auth'])->name('admin_depilation_partL.store');
Route::get('/admin/depilation/partL/delete/{id}', [DepilationController::class,'admin_part_l_delete'])->middleware(['auth'])->name('admin_depilation_partL.delete');
Route::post('/admin/depilation/partL/update/{id}', [DepilationController::class,'admin_part_l_update'])->middleware(['auth'])->name('admin_depilation_partL.update');

Route::get('/admin/wormwood', [WormwoodController::class,'admin_index'])->middleware(['auth'])->name('admin_wormwood');
Route::post('/admin/wormwood/store', [WormwoodController::class,'admin_store'])->middleware(['auth'])->name('admin_wormwood.store');
Route::get('/admin/wormwood/show/{id}/{genre_id}', [WormwoodController::class,'admin_show'])->middleware(['auth'])->name('admin_wormwood.show');
Route::post('/admin/wormwood/delete/{id}/{genre_id}', [WormwoodController::class,'admin_delete'])->middleware(['auth'])->name('admin_wormwood.delete');
Route::post('/admin/wormwood/update/{id}/{genre_id}', [WormwoodController::class,'admin_update'])->middleware(['auth'])->name('admin_wormwood.update');

Route::get('/admin/bridal', [BridalController::class,'admin_index'])->middleware(['auth'])->name('admin_bridal');
Route::post('/admin/bridal/store', [BridalController::class,'admin_store'])->middleware(['auth'])->name('admin_bridal.store');
Route::get('/admin/bridal/show/{id}/{genre_id}', [BridalController::class,'admin_show'])->middleware(['auth'])->name('admin_bridal.show');
Route::post('/admin/bridal/delete/{id}/{genre_id}', [BridalController::class,'admin_delete'])->middleware(['auth'])->name('admin_bridal.delete');
Route::post('/admin/bridal/update/{id}/{genre_id}', [BridalController::class,'admin_update'])->middleware(['auth'])->name('admin_bridal.update');

Route::get('/admin/nail', [NailController::class,'admin_index'])->middleware(['auth'])->name('admin_nail');
Route::post('/admin/nail/store', [NailController::class,'admin_store'])->middleware(['auth'])->name('admin_nail.store');
Route::get('/admin/nail/show/{id}/{genre_id}', [NailController::class,'admin_show'])->middleware(['auth'])->name('admin_nail.show');
Route::post('/admin/nail/delete/{id}/{genre_id}', [NailController::class,'admin_delete'])->middleware(['auth'])->name('admin_nail.delete');
Route::post('/admin/nail/update/{id}/{genre_id}', [NailController::class,'admin_update'])->middleware(['auth'])->name('admin_nail.update');

Route::get('/admin/campaign', [CampaignController::class,'admin_index'])->middleware(['auth'])->name('admin_campaign');
Route::post('/admin/campaign/store', [CampaignController::class,'admin_store'])->middleware(['auth'])->name('admin_campaign.store');
Route::get('/admin/campaign/show/{id}', [CampaignController::class,'admin_show'])->middleware(['auth'])->name('admin_campaign.show');
Route::post('/admin/campaign/delete/{id}', [CampaignController::class,'admin_delete'])->middleware(['auth'])->name('admin_campaign.delete');
Route::post('/admin/campaign/update/{id}', [CampaignController::class,'admin_update'])->middleware(['auth'])->name('admin_campaign.update');

Route::get('/menu/men', [MenuController::class,'index_men']);
Route::get('/menu/women', [MenuController::class,'index_women']);

Route::get('/menu/women/eyelash', [EyelashController::class,'index']);

Route::get('/menu/women/depilation', [DepilationController::class,'index']);

Route::get('/menu/women/esthetic', [EstheticController::class,'index']);

Route::get('/menu/women/wormwood', [WormwoodController::class,'index']);

Route::get('/menu/women/bridal', [BridalController::class,'index']);

Route::get('/menu/women/nail', [NailController::class,'index']);

Route::get('/campaign/detail/{id}', [CampaignController::class,'show']);

require __DIR__.'/auth.php';
