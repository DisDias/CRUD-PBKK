<?php

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

Route::get('/', function () {
    return view('parkir.index');
});
*/

use App\Http\Controllers\ParkirController;
Route::get('/', [ParkirController::class, 'index']);
Route::post('/parkir/create', [ParkirController::class, 'create']);
Route::get('/parkir/{nomot_tiket}/edit', [ParkirController::class, 'edit']);
Route::post('/parkir/{nomor_tiket}/update', [ParkirController::class, 'update']);
Route::get('/parkir/{nomot_tiket}/delete', [ParkirController::class, 'destroy']);
Route::get('/parkir/{nomot_tiket}/detail', [ParkirController::class, 'show']);
