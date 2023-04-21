<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\web\IndexController;
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

Route::name('admin.')->group(function () {
    Route::get('/dashboard',[IndexController::class,'index'])->name('home');
});
