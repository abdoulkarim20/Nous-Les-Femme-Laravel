<?php

use App\Http\Controllers\CommuneController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\QuartierController;
use App\Http\Controllers\RegionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|;;
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('regions', RegionController::class);
Route::resource('departements', DepartementController::class);
Route::resource('communes', CommuneController::class);
Route::resource('quartiers', QuartierController::class);
Route::resource('entreprises', EntrepriseController::class);
