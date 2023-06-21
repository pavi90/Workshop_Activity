<?php

namespace App\Http\Controllers;

use App\Http\Resources\subjectResource;
use App\Models\subject;
use App\Http\Requests\StoresubjectRequest;
use App\Http\Requests\UpdatesubjectRequest;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::all();
        return (["subjects" => subjectResource::collection($subjects)]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubjectRequest $request)
    {
        $subject = Subject::create($request->all());
        return new subjectResource($subject);
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        return new subjectResource($subject);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatesubjectRequest $request, Subject $subject)
    {
        $subject -> update($request->all());
        return new subjectResource($subject);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();
        return response(null,204);
    }
}
