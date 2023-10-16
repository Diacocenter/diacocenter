<?php

namespace App\Http\Controllers\Web\v1\ProviderPanel;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCommunicationRecordRequest;
use App\Http\Resources\ProviderCommunicationRecordsResource;
use App\Http\Resources\ProviderCommunicationResource;
use App\Models\Communication;
use App\Models\CommunicationRecord;
use App\Models\TicketRecord;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ProviderCommunicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Communication $communication, Request $request)
    {
      return ProviderCommunicationResource::collection(auth()->user()->communication()->get());
    }

    /**
     * Display a listing of the resource.
     */
    public function message()
    {
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
    public function store()
    {
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

//        $communicationRecordObj = new CommunicationRecord($request->validated());
//        $communicationRecordObj->communication_id = $communication->id;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
