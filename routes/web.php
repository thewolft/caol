<?php

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

Route::get('/', 'usuarioController@read');
Route::post('/relatorio','relatorioController@getRelatorio')->name('relatorio');
Route::post('/getPizza','relatorioController@getPizza')->name('getPizza');
Route::post('/getGrafico','relatorioController@getGrafico')->name('getGrafico');
Route::post('/tabla',function () {
    return view('tabla');
})->name('tabla');
Route::post('/pizza',function () {
    return view('pizza');
})->name('pizza');
Route::post('/grafico',function () {
    return view('grafico');
})->name('grafico');
