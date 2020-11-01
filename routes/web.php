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
*/

//Ruta raíz
/*Route::get('/ciclo', function () {
    return view('welcome');
});*/

Route::get('ciclo', 'UserController@index');//listar
Route::post('ciclo/users', 'UserController@store')->name('users.store');//guardar
Route::delete('ciclo/users/{user}', 'UserController@destroy')->name('users.destroy');//eliminar

//Route::get('/ciclo', [UserController::class,'index']);
//Route::post('/users', [UserController::class, 'store'])->name('users.store');
//Route::delete('/users/{user}', [UserController::class,'destroy'])->name('users.destroy');