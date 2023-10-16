<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
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
    public function update(Request $request)
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

    public function SeekerPanel(){
        if (auth()->user()->hasRole("seeker")) {
            return view("panel.technology-seeker-panel.technology-seeker-panel");
        }
        return redirect()->route("login");
    }

    public function ProviderPanel(){
        if (auth()->user()->hasRole("provider")) {
            return view("panel.technology-provider-panel.technology-provider-panel");
        }
        return redirect()->route("login");
    }

    public function adminPanel(){
        if (auth()->user()->hasRole("admin")) {
            return view("panel.admin-panel.admin-panel");
        }
        return redirect()->route("login");
    }

    public function managerPanel(){
        if (auth()->user()->hasRole("manager")) {
            return view("panel.manager-panel.manager-panel");
        }
        return redirect()->route("login");
    }

    public function advisorPanel(){
        if (auth()->user()->hasRole("advisor")) {
            return view("panel.advisor-panel.advisor-panel");
        }
        return redirect()->route("login");
    }
}
