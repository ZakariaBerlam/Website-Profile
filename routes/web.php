<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request as HttpRequest;
use App\Http\Controllers\iniController;

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




Route::get('/',[iniController::class,'anjay']);
Route::get('/{nama}',[iniController::class,'deskrip']);
