<?php

namespace App\Http\Controllers\Web\v1\AdvisorPanel;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProviderPanel\StoreProviderDocumentRequest;
use App\Http\Resources\ProviderDocumentResource;
use App\Models\TemporaryFile;
use App\Models\UserDocuments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdvisorDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ProviderDocumentResource::collection(auth()->user()->userDocuments()->get());
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
    public function store(StoreProviderDocumentRequest $request,UserDocuments $userDocument)
    {
        $tempObj = TemporaryFile::find($request->validated("file"));
        $userDocument->updateOrFail($request->validated());
        $userDocument = new UserDocuments([
            'user_id'   =>  auth()->user()->id,
            "title"     =>  $request->validated("title"),
            "type"      =>  $tempObj->type,
            "file"      =>  $tempObj->id,
            //"status"
        ]);
        $dest = "users/documents/";
        $tempFilesPath = "tmp-files/";
        Storage::disk('public')->move($tempFilesPath. $tempObj->name, $dest.$tempObj->name);
        return $userDocument->save();
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
    public function destroy(UserDocuments $document)
    {
        return $document->deleteOrFail();
    }
}
