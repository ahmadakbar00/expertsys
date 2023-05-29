<?php

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
Route::get('/pakar', [App\Http\Controllers\Sistem_Pakar\Main::class, 'index']);
Route::get('/forwardchaining', [App\Http\Controllers\Sistem_Pakar\ForwardChaining::class, 'index']);
Route::get('/forwardchaining/data-object', [App\Http\Controllers\Sistem_Pakar\ForwardChaining::class, 'data_object']);
Route::post('/fch/add-data-object', [App\Http\Controllers\Sistem_Pakar\ForwardChaining::class, 'add_data_object']);
Route::get('/forwardchaining/data-rule', [App\Http\Controllers\Sistem_Pakar\ForwardChaining::class, 'data_rule']);




Route::get('/', function () {
    return view('welcome');
});
