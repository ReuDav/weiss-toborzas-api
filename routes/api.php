<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GetQuizSolutionController;
use App\Http\Controllers\GetProductDataCollecterController;
use App\Http\Controllers\GetFeedbackController;
use App\Http\Controllers\QuizSolutionController;
use App\Http\Controllers\ProductDataCollecterController;
use App\Http\Controllers\FeedbackController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/get/quiz-solution', [GetQuizSolutionController::class, 'index']);

Route::get('/get/steal-data', [GetProductDataCollecterController::class, 'index']);

Route::get('/get/feedback', [GetFeedbackController::class, 'index']);

Route::post('/quiz-solution', [QuizSolutionController::class, 'store']);

Route::post('/steal-data', [ProductDataCollecterController::class, 'store']);

Route::post('/add-feedback', [FeedbackController::class, 'store']);