<?php

use App\Http\Controllers\CovidTrack;
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
    return view('welcome');
});

Route::get('/data', "App\Http\Controllers\CovidTrack@listData");

Route::get('/data/{country}', "App\Http\Controllers\CovidTrack@sortData");

//Route::get('/data/{sort}', "App\Http\Controllers\CovidTrack@listData");

//Route::get('data', [CovidTrack::class, 'listData']);
