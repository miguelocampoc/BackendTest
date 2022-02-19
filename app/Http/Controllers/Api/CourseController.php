<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CourseResource;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct()
    {
        /* $this->middleware('auth:api')->except(['index', 'show']); */
    }

    public function index()
    {
        $courses = Course::included()->sort()->filter()->getOrPaginate();
        return response()->json($courses, 201);
        /* return CourseResource::collection($courses); */
    }


    public function store(Request $request)
    {

        return auth()->user();

        /* if(auth()->check()){
            return auth()->user();
        }

        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        $course = Course::create($data);        
        return response()->json($course, 201); */
 
    }

    public function show($id)
    {

        $course = Course::included()->findOrFail($id);
        return response()->json($course, 201);
    }

    public function update(Request $request, Course $course)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        $course->update($data);

        /* return new CourseResource($course); */
        return response()->json($course, 201);
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return response()->json(null, 204);
    }
}
