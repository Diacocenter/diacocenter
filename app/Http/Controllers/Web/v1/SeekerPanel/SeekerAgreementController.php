<?php

namespace App\Http\Controllers\Web\v1\SeekerPanel;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProviderActivitiesResource;
use App\Http\Resources\ProviderAgreementResource;
use Illuminate\Http\Request;

class SeekerAgreementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ProviderAgreementResource::collection(auth()->user()->agreements()->get());
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
    public function destroy(string $id)
    {
        //
    }
}
