<?php

namespace App\Http\Controllers\Web\v1;

use App\Http\Controllers\Controller;
use App\Models\UserWorkExperience;
use App\Http\Requests\StoreUserWorkExperinceRequest;
use App\Http\Requests\UpdateUserWorkExperinceRequest;

class UserWorkExperinceController extends Controller
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
    public function store(StoreUserWorkExperinceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserWorkExperience $userWorkExperince)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserWorkExperience $userWorkExperince)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserWorkExperinceRequest $request, UserWorkExperience $userWorkExperince)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserWorkExperience $userWorkExperince)
    {
        //
    }
}
