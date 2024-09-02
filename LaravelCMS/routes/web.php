<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController as AdminController;
use App\Http\Controllers\Site\HomeController as SiteController;

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

Route::get('/', [SiteController::class, 'index']);


Route::prefix('painel')->group(function(){

    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('login', [LoginController::class, 'index'])->name('login');

});
