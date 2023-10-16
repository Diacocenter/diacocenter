<?php

namespace App\Http\Controllers\Web\v1\ProviderPanel;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserAgreementRequest;
use App\Http\Resources\ProviderAgreementResource;
use App\Http\Resources\UserAgreementDetailResource;
use App\Models\Agreement;
use App\Models\User;
use App\Models\UserAgreement;
use Illuminate\Http\Request;

class ProviderAgreementController extends Controller
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
    public function show(Agreement $agreement): UserAgreementDetailResource
    {
        return new UserAgreementDetailResource(auth()->user()->agreements()->where("agreement_id", "=", $agreement->id)->first());

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
    public function update(Agreement $agreement,StoreUserAgreementRequest $request):bool
    {
        //$agreement->attach(auth()->user());
        $userAgreement = $agreement->users()->where("user_id", "=", auth()->user()->id)->first();
        if($userAgreement) {
            return $userAgreement->pivot->update([
                "acceptance_1" => true,
                "acceptance_2" => true
            ]);
        }
        return abort(404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
