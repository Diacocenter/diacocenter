<?php

namespace App\Http\Controllers\Web\v1\ProviderPanel;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserEducationRequest;
use App\Http\Requests\UpdateUserEducationRequest;
use App\Http\Resources\ProviderEducationResource;
use App\Models\UserEducation;
use Illuminate\Http\Request;

class ProviderEducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ProviderEducationResource::collection(auth()->user()->userEducations()->get());
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
    public function store(StoreUserEducationRequest $request)
    {
        auth()->user()->userEducations()->updateOrCreate($request->validated());
        return response("your data is recorded",200);
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
    public function update(UserEducation $userEducation,UpdateUserEducationRequest $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserEducation $userEducation)
    {
        return $userEducation->deleteOrFail();
    }
}
