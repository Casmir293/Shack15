<?php

namespace App\Http\Controllers;

use App\Models\Metrics;

class MetricsController extends Controller
{
    public function getMetrics()
    {
        $metrics = Metrics::latest()->first();
        return response()->json($metrics);
    }
}
