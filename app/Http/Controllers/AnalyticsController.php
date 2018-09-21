<?php

namespace App\Http\Controllers;


use Spatie\Analytics\Analytics;
use Spatie\Analytics\Period;

class AnalyticsController extends Controller
{
    public function index()
    {
        $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));

        return view('analytics', compact($analyticsData));
    }
}
