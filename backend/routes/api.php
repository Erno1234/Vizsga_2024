<?php

use App\Http\Controllers\SzavakController;
use App\Http\Controllers\TemaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/temak', [TemaController::class,'index']) ;
Route::post('/temak/create', [TemaController::class,'store']) ;
Route::put('/temak/edit/{$id}', [TemaController::class,'update']) ;
Route::delete('/temak/delete/{$id}', [TemaController::class,'destroy']) ;
Route::get('/temak/lista', [TemaController::class,'temakLista']) ;

Route::get('/szavak', [SzavakController::class,'index']) ;
Route::post('/szavak/create', [SzavakController::class,'store']) ;
Route::put('/szavak/edit/{$id}', [SzavakController::class,'update']) ;
Route::delete('/szavak/delete/{$id}', [SzavakController::class,'destroy']) ;
Route::get('/szavak/lista', [SzavakController::class,'szavakLista']);