<?php

namespace Modules\ProgrammaticSEO\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\City;

class PageController extends Controller
{
    public function courseCity($course, $city)
    {
        $course = Course::where('slug', $course)->firstOrFail();
        $city = City::where('slug', $city)->firstOrFail();

        $title = "{$course->name} Training in {$city->name}";
        $description = "Best {$course->name} certification training in {$city->name}. Enroll today.";

        return view('programmaticseo::course-city', compact('course', 'city'));

    }
}

