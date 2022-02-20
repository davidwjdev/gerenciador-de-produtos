<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\TagsController;
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

Route::get('/tags', [TagsController::class,'index']);
Route::get('/tags/adicionar', [TagsController::class,'create']);
Route::post('/tags/adicionar', [TagsController::class,'store']);
Route::get('/tags/editar/id={id}', [TagsController::class,'edit']);
Route::post('/tags/editar/id={id}', [TagsController::class,'update']);
Route::get('/tags/apagar/id={id}', [TagsController::class,'destroy']);
