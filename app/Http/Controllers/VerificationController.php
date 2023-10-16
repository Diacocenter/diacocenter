<?php

namespace App\Http\Controllers;

use App\Events\VerificationEvent;
use App\Http\Requests\VerificationRequest;
use App\Models\User;
use App\Models\UserProject;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VerificationController extends Controller
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
    public function store(VerificationRequest $request)
    {
        $verificationCode =$request->confirm ;
        if ($verificationCode == auth()->user()->verification_code)
        {
            auth()->user()->update(["email_verified_at"=>Carbon::now()]);
            return redirect()->route("login");
        }
        return redirect()->route("verify-email");
    }

    /**
     * Display the specified resource.
     */
    public function show(UserProject $userProject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserProject $userProject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserProject $userProject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserProject $userProject)
    {
        //
    }

    public function resend(User $user)
    {
        VerificationEvent::dispatch(auth()->user());
    }
}
