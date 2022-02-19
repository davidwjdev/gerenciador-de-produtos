<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
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

Route::get('/', [HomeController::class,'index']);
Route::get('/produtos', [ProdutosController::class,'index']);
Route::get('/produtos/adicionar', [ProdutosController::class,'create']);
Route::post('/produtos/adicionar', [ProdutosController::class,'store']);
Route::get('/produtos/editar/id={id}', [ProdutosController::class,'edit']);
Route::post('/produtos/editar/id={id}', [ProdutosController::class,'update']);
Route::get('/produtos/apagar/id={id}', [ProdutosController::class,'destroy']);
