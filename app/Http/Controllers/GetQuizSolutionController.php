<?php

namespace App\Http\Controllers;

use App\Models\GetQuizSolution;
use Illuminate\Http\JsonResponse;

class GetQuizSolutionController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(GetQuizSolution::all());
    }
}
