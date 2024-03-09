<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\UnivController;
use App\Http\Controllers\NegaraController;
use App\Http\Controllers\metronicController;


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

// Route::get('/index', function () {
//     return view('index', [
//         'title' => 'Default',
//         'lokasi' => 'Dashboard'
//     ]);
// });
Route::get('/', [metronicController::class, 'index']);

Route::get('/univ',  [UnivController::class, 'index']);

Route::resource('negara',  NegaraController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy']);

Route::resource('/kota',  KotaController::class);