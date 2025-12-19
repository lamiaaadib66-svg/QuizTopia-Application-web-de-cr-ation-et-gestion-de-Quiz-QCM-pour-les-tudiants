<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ChoixController;
use App\Http\Controllers\ResultatController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/choix', [ChoixController::class, 'index']);
Route::get('/api/choix/{id}', [ChoixController::class, 'show']);    
Route::post('/api/choix', [ChoixController::class, 'store']);       
Route::put('/api/choix/{id}', [ChoixController::class, 'update']);  
Route::delete('/api/choix/{id}', [ChoixController::class, 'destroy']); 

Route::get('/api/resultat', [ResultatController::class, 'index']);        
Route::get('/api/resultat/{id}', [ResultatController::class, 'show']);    
Route::post('/api/resultat', [ResultatController::class, 'store']);       
Route::put('/api/resultat/{id}', [ResultatController::class, 'update']);  
Route::delete('/api/resultat/{id}', [ResultatController::class, 'destroy']); 

Route::get('/api/questions', [QuestionController::class, 'index']);
Route::get('/api/questions/{id}', [QuestionController::class, 'show']);
Route::post('/api/questions', [QuestionController::class, 'create']);
Route::put('/api/questions/{id}', [QuestionController::class, 'update']);
Route::delete('/api/questions/{id}', [QuestionController::class, 'delete']);
