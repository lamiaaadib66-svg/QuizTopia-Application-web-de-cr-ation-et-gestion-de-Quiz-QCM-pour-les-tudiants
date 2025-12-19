<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ChoixController;
use App\Http\Controllers\ResultatController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/choix', [ChoixController::class, 'index']);
Route::get('/choix/{id}', [ChoixController::class, 'show']);    
Route::post('/choix', [ChoixController::class, 'store']);       
Route::put('/choix/{id}', [ChoixController::class, 'update']);  
Route::delete('/choix/{id}', [ChoixController::class, 'destroy']); 

Route::get('/resultat', [ResultatController::class, 'index']);        
Route::get('/resultat/{id}', [ResultatController::class, 'show']);    
Route::post('/resultat', [ResultatController::class, 'store']);       
Route::put('/resultat/{id}', [ResultatController::class, 'update']);  
Route::delete('/resultat/{id}', [ResultatController::class, 'destroy']); 

Route::get('/questions', [QuestionController::class, 'index']);
Route::get('/questions/{id}', [QuestionController::class, 'show']);
Route::post('/questions', [QuestionController::class, 'create']);
Route::put('/questions/{id}', [QuestionController::class, 'update']);
Route::delete('/questions/{id}', [QuestionController::class, 'delete']);
