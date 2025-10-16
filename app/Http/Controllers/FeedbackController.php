<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'feedback' => 'required|string|max:250',
            'star_count' => 'required|integer|min:1|max:5',
        ]);

        $feedback = Feedback::create($validated);

        return response()->json([
            'message' => 'Köszönjük a visszajelzést!',
            'data' => $feedback
        ], 201);
    }
}
