<?php

namespace App\Http\Controllers;

use App\Models\QuizSolution;
use Illuminate\Http\Request;

class QuizSolutionController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'solution' => 'required|array',
            'solution.*' => 'array', // minden elem is legyen tömb
        ]);

        $quiz = QuizSolution::create([
            'solution' => $validated['solution'],
        ]);

return response($quiz->toJson(JSON_UNESCAPED_UNICODE))
    ->header('Content-Type', 'application/json');
    }
}
