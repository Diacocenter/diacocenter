<?php

namespace App\Http\Controllers\Web\v1\SeekerPanel;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCommunicationRecordRequest;
use App\Http\Requests\StoreConversationRequest;
use App\Http\Resources\ConversationSearchResource;
use App\Http\Resources\ProviderActivitiesResource;
use App\Http\Resources\ProviderCommunicationRecordsResource;
use App\Http\Resources\ProviderCommunicationResource;
use App\Http\Resources\User\ConversationResource;
use App\Models\Communication;
use App\Models\CommunicationRecord;
use App\Models\Conversation;
use App\Models\ConversationRecord;
use App\Models\Role;
use App\Models\User;
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

    public function tabs(Role $role)
    {
        $communication = Communication::where("user_id", "=", auth()->user()->id)->orWhere("assigned_by", "=", auth()->user()->id)->get()->filter(function ($item) use ($role) {
            return $item->assignBy()->first()->roles()->first()->name == $role->name;
        });
        return ProviderCommunicationResource::collection($communication);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCommunicationRecordRequest $request)
    {
        $communicationObj = new Communication([
            "title" => "salam jafar",
        ]);
        $communicationObj->user()->associate(auth()->user());
        $communicationObj->assignBy()->associate($request->assign);
        $communicationObj->save();

        $communicationRecordObj = new CommunicationRecord($request->validated());
        $communicationRecordObj->communication()->associate($communicationObj);
        $communicationRecordObj->user()->associate(auth()->user());
        $communicationRecordObj->save();
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

    public function search(StoreConversationRequest $request)
    {
        return ConversationSearchResource::collection(User::where("id" , "<>" , auth()->user()->id)->where('first_name', 'like', '%' . $request->get('keyword') . '%')->orWhere('last_name', 'like', '%' . $request->get('keyword') . '%')->get());
    }
}
