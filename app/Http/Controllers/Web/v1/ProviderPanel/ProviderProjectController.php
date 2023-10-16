<?php

namespace App\Http\Controllers\Web\v1\ProviderPanel;

use App\Enums\ProjectStatusEnum;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProviderCommunicationResource;
use App\Http\Resources\ProviderDiscoverResource;
use App\Http\Resources\ProviderProjectResource;
use App\Models\Project;
use Illuminate\Http\Request;

class ProviderProjectController extends Controller
{
    public function index(Request $request)
    {
        switch ($request) {
            case  "applied":
                dd("applied");
                return ProviderProjectResource::collection(auth()->user()->projects()->where('projects.status','=',0)->get());
                break;

            case  "accepted":
                return ProviderProjectResource::collection(auth()->user()->projects()->where('projects.status','=',1)->get());
                break;

            case  "completed":
                return ProviderProjectResource::collection(auth()->user()->projects()->where('projects.status','=', 2)->get());
                break;
        }
//        return ProviderProjectResource::collection(auth()->user()->projects()->get());
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return ProviderDiscoverResource::collection(Project::all());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
