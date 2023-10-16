<?php

namespace App\Http\Controllers;

use App\Http\Requests\CooperationalRequest;
use App\Models\UserProject;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CooperationalController extends Controller
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
    public function store(CooperationalRequest $request)
    {
        if (auth()->user()->is_cooperational===null)
        {
            auth()->user()->update([ "is_cooperational" => $request->is_cooperational ]);
        }
        return redirect()->route("login");
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
}
