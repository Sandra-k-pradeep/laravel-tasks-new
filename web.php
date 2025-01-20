<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\task;

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

Route::get('home', [task::class,'index']);
Route::get('about', [task::class,'about']);
Route::get('contact', [task::class,'contact']);