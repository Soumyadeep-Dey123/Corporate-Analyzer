<?php
namespace App\Http\Controllers;

use App\Models\Surveys as Survey;

class DemoSurveyController extends Controller
{
    public function show()
    {
        $demoSurvey = Survey::first(); // or Survey::find(1);
        return view('demo-survey', compact('demoSurvey'));
    }
}