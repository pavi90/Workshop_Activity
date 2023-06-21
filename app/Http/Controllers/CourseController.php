<?php

namespace App\Http\Controllers;

use App\Http\Resources\courseResource;
use App\Models\course;
use App\Http\Requests\StorecourseRequest;
use App\Http\Requests\UpdatecourseRequest;

class CourseController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::with('subjects')->get();
        return (["courses" => courseResource::collection($courses)]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecourseRequest $request)
    {
        $course = Course::create($request->validated());
        return new courseResource($course);
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return new courseResource($course);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecourseRequest $request, Course $course)
    {
        $course -> update($request->validated());
        return new courseResource($course);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return response(null,204);
    }
}
