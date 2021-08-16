<?php

use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\ImagesController;
use Illuminate\Support\Facades\Route;

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

Route::get("/", [FrontEndController::class, "index"]);


//Controller Images

Route::get("/admin", [ImagesController::class,"indexadmin"])->name("admin.welcome");
Route::get("/fichiers", [ImagesController::class,"create"])->name("admin.fichiers");
Route::post("/store", [ImagesController::class,"store"])->name("admin.store");
Route::get("/create", [ImagesController::class,"create"])->name("admin.create");
Route::post("/edit/{id}", [ImagesController::class,"edit"])->name("admin.edit");
Route::post("/update/{id}", [ImagesController::class,"update"])->name("admin.update");
Route::get("/delete/{id}", [ImagesController::class,"destroy"])->name("admin.destroy");
