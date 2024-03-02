<?php

use App\Http\Controllers\QualificationController;
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

Route::get('/', function () {
    return view('Formulario');
});
Route::get('/califi',[QualificationController::class,'create']);
Route::post('/califi',[QualificationController::class,'store'])->name('califi.store');