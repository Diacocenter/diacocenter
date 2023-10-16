<?php

namespace App\Http\Controllers\Web\v1;

use App\Http\Controllers\Controller;
use App\Models\CommunicationRecord;
use App\Http\Requests\StoreCommunicationRecordRequest;
use App\Http\Requests\UpdateCommunicationRecordRequest;

class CommunicationRecordController extends Controller
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
    public function store(StoreCommunicationRecordRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CommunicationRecord $communicationRecord)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CommunicationRecord $communicationRecord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommunicationRecordRequest $request, CommunicationRecord $communicationRecord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CommunicationRecord $communicationRecord)
    {
        //
    }
}
