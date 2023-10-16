<?php

namespace App\Http\Controllers\Web\v1;

use App\Http\Controllers\Controller;
use App\Models\UserView;
use App\Http\Requests\StoreUserViewRequest;
use App\Http\Requests\UpdateUserViewRequest;

class UserViewController extends Controller
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
    public function store(StoreUserViewRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserView $userView)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserView $userView)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserViewRequest $request, UserView $userView)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserView $userView)
    {
        //
    }
}
