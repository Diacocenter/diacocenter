<?php

namespace App\Http\Controllers\Web\v1;

use App\Http\Controllers\Controller;
use App\Models\NewsLetter;
use App\Http\Requests\StoreNewsLetterRequest;
use App\Http\Requests\UpdateNewsLetterRequest;

class NewsLetterController extends Controller
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
    public function store(StoreNewsLetterRequest $request)
    {
//        dd($request->validated());
        if ($request->validated()){
            Newsletter::create($request->validated());
            return redirect()->back()->with('result', 'You\'re email has submitted successfully.');
        }
        return redirect()->back()->withErrors('newsletter_email', 'You\'re email registration fails.');

    }

    /**
     * Display the specified resource.
     */
    public function show(NewsLetter $newsLetter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewsLetter $newsLetter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsLetterRequest $request, NewsLetter $newsLetter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NewsLetter $newsLetter)
    {
        //
    }
}
