<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Answerscontroller;
use App\Http\Controllers\Questionscontroller;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/answer', [AnswersController::class, 'index']);
Route::post('/answer',[AnswersController::class,'store']);
Route::get('/answer/{answer}', [AnswersController::class, 'delete']);

Route::get('/question',[QuestionsController::class,'index']);
Route::post('/question',[QuestionsController::class,'store']);
Route::get('/question/{question}', [QuestionsController::class, 'delete']);
Route::get('/question/{id}/answers',[AnswersController::class,'display']);

