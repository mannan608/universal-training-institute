<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class IndustryController extends Controller
{
    public function index(string $slug)
    {
        $categories = json_decode(
            File::get(resource_path('data/categories.json')),
            true
        );

        $courses = json_decode(
            File::get(resource_path('data/courses.json')),
            true
        );

        
// return $courses;
        return view('frontend.pages.industry.index', [
            'industry' => $categories,
            'courses' => $courses,
        ]);
    }

    public function show(string $slug)
    {
        $courses = json_decode(
            File::get(resource_path('data/courses.json')),
            true
        );

        $categories = json_decode(
            File::get(resource_path('data/categories.json')),
            true
        );

        // Find course by slug
        $course = collect($courses)
            ->firstWhere('slug', $slug);

        abort_if(!$course, 404);

        // Find category
        $category = collect($categories)
            ->firstWhere('slug', $course['category_slug']);

        abort_if(!$category, 404);

        // return $course;

        return view('frontend.pages.industry.show', [
            'course' => $course,
            'category' => $category,
        ]);
    }

    public function industryEnrollment()
    {
        return view('frontend.pages.industry.enrollment');
    }

        public function courseEnrollment()
    {
        return view('frontend.pages.industry.enrollment');
    }
}
