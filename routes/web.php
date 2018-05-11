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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cadastro_instituicao', 'SaudeController@cadastro_instituicao');
Route::post('/cadastro_instituicao', 'SaudeController@submit_instituicao');
Route::get('/cadastro_material', 'SaudeController@cadastro_material');
Route::post('/cadastro_material', 'SaudeController@submit_material');
Route::get('/lista_instituicao', 'SaudeController@lista_instituicao');
Route::get('/lista_material', 'SaudeController@lista_material');
Route::get('/info_instituicao', 'SaudeController@info_instituicao');
