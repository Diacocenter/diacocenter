<?php

namespace App\Http\Controllers\Web\v1;

use App\Http\Controllers\Controller;
use App\Models\region;
use App\Http\Requests\StoreregionRequest;
use App\Http\Requests\UpdateregionRequest;

class RegionController extends Controller
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
    public function store(StoreregionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(region $region)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(region $region)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateregionRequest $request, region $region)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(region $region)
    {
        //
    }
}
