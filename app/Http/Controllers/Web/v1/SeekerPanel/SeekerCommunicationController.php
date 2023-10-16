<?php

namespace App\Http\Controllers\Web\v1\SeekerPanel;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCommunicationRecordRequest;
use App\Http\Resources\ProviderActivitiesResource;
use App\Http\Resources\ProviderCommunicationRecordsResource;
use App\Http\Resources\ProviderCommunicationResource;
use App\Models\Communication;
use App\Models\CommunicationRecord;
use Illuminate\Http\Request;

class SeekerCommunicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ProviderCommunicationResource::collection(auth()->user()->communication()->get());
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
    public function show(Communication $communication)
    {
        $communicationRecords = $communication->records()->where("is_read", "=", false)->get();

        if($communicationRecords) {
            foreach ($communicationRecords as $communicationRecord) {
                $communicationRecord->update(["is_read" => true]);
            }
        }

        return new ProviderCommunicationRecordsResource($communication);

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
    public function update(Communication $communication,StoreCommunicationRecordRequest $request)
    {
        $communicationRecordObj = new CommunicationRecord($request->validated());
        $communicationRecordObj->communication()->associate($communication);
        $communicationRecordObj->user()->associate(auth()->user());
        $communicationRecordObj->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
