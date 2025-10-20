<?php

namespace App\Http\Controllers;

use App\Models\GetFeedback;

class GetFeedbackController extends Controller
{
    public function index()
    {
        return response()->json(GetFeedback::all());
    }
}
