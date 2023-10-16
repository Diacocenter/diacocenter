<?php

namespace App\Http\Controllers\Web\v1;

use App\Http\Controllers\Controller;
use App\Models\UserViewPermissions;
use App\Http\Requests\StoreUserViewPermissionsRequest;
use App\Http\Requests\UpdateUserViewPermissionsRequest;

class UserViewPermissionsController extends Controller
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
    public function store(StoreUserViewPermissionsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserViewPermissions $userViewPermissions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserViewPermissions $userViewPermissions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserViewPermissionsRequest $request, UserViewPermissions $userViewPermissions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserViewPermissions $userViewPermissions)
    {
        //
    }
}
