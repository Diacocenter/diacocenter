<?php

namespace App\Http\Controllers\Web\v1;

use App\Http\Controllers\Controller;
use App\Models\ProjectDocument;
use App\Models\ProjectPhase;
use App\Http\Requests\StoreProjectPhaseRequest;
use App\Http\Requests\UpdateProjectPhaseRequest;

class ProjectPhaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectPhaseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProjectPhase $phase,ProjectDocument $document)
    {
        return view("projects.phase")->with("phases",$phase)->with("document" , $document);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProjectPhase $projectPhase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectPhaseRequest $request, ProjectPhase $projectPhase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectPhase $projectPhase)
    {
        //
    }
}
