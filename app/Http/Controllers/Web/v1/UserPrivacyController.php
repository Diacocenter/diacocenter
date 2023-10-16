<?php

namespace App\Http\Controllers\Web\v1;

use App\Http\Controllers\Controller;
use App\Models\UserPrivacy;
use App\Http\Requests\StoreUserPrivacyRequest;
use App\Http\Requests\UpdateUserPrivacyRequest;

class UserPrivacyController extends Controller
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
    public function store(StoreUserPrivacyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserPrivacy $userPrivacy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserPrivacy $userPrivacy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserPrivacyRequest $request, UserPrivacy $userPrivacy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserPrivacy $userPrivacy)
    {
        //
    }
}
