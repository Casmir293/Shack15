<?php

namespace App\Http\Controllers;

use App\Models\Metrics;

class MetricsController extends Controller
{
    public function index()
    {
        $metrics = Metrics::latest()->first(['id', 'total_members', 'active_members', 'events']);
        return response()->json($metrics);
    }
}
