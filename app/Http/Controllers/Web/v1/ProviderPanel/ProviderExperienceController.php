<?php

namespace App\Http\Controllers\Web\v1\ProviderPanel;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserWorkExperinceRequest;
use App\Http\Resources\ProviderExperienceResource;
use App\Models\UserWorkExperience;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class ProviderExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ProviderExperienceResource::collection(auth()->user()->userExperience()->get());
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
    public function store(StoreUserWorkExperinceRequest $request)
    {
        return auth()->user()->userExperience()->updateOrCreate($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function destroy(UserWorkExperience $userWorkExperience): bool|null
    {
        return $userWorkExperience->delete();
    }
}
