<?php

namespace App\Http\Controllers;

use App\Models\GetProductDataCollecter;

class GetProductDataCollecterController extends Controller
{
    public function index()
    {
        return response()->json(GetProductDataCollecter::all());
    }
}
