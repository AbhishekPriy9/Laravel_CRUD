<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Crud;

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

Route::get('/new', function () {
    return view('welcome');
});


Route::post('/Create', [Crud::class, 'create']);
Route::get('/', [Crud::class, 'show']);
Route::get('/edit/{id}', [Crud::class, 'edit']);
Route::post('/update/{id}', [Crud::class, 'update']);
Route::get('/delete/{id}', [Crud::class, 'delete']);
Route::get('/login', [Crud::class, 'login1']);
Route::post('/logon', [Crud::class, 'login']);
