<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerKontak;
use App\Http\Controllers\ControllerTeams;
use App\Http\Controllers\ControllerPlayers;

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
//Route::get('/kontak','ControllerKontak@index');
Route::get('/kontak', [ControllerKontak::class, 'index']);

Route::get('/teams', [ControllerTeams::class, 'index']);
Route::post('/teams/store',[ControllerTeams::class, 'store']);

Route::get('/players', [ControllerPlayers::class, 'index']);
Route::post('/players/store',[ControllerPlayers::class, 'store']);
