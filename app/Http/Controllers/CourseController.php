<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function store(Request $request)
    {
        // Validācijas noteikumi
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'banner_url' => 'required|url',
            'student_count' => 'required|integer|min:0'
        ]);

        // Izveidojam jaunu kursu
        $course = Course::create($request->all());

        return response()->json($course, 201);
    }

    public function index()
    {
        $courses = Course::all();

        return response()->json($courses);
    }
}
