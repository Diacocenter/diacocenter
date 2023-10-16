<?php

namespace App\Http\Controllers\Web\v1\SeekerPanel;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Resources\ProviderActivitiesResource;
use App\Http\Resources\ProviderDiscoverResource;
use App\Models\Agreement;
use App\Models\Image;
use App\Models\Project;
use App\Models\ProjectDocument;
use App\Models\ProjectGallery;
use App\Models\ProjectPhase;
use App\Models\TemporaryFile;
use App\Models\User;
use App\Models\UserPrivacy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SeekerProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ProviderDiscoverResource::collection(Project::all());
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
    public function store(Project $project,StoreProjectRequest $request)
    {
        $projectObj = new Project($request->validated());
        $projectObj->user_id = auth()->user()->id;
        $projectObj->language_id = 1;
        unset($projectObj["phase"],$projectObj["file"]);
        $projectObj->save();

        foreach ($request->validated("file") as $file){
            $tempObj = TemporaryFile::find($file);
            if ($tempObj){
                $projectGallery = new ProjectGallery([
                    "project_id"  => $projectObj->id,
                    "url"         => $tempObj->name,
                    "image_type"  => "header",
                    "alt"         => $projectObj->name . " - " . config("name")
                ]);
                Storage::disk('public')->move("tmp-files/" . $tempObj->name, "projects/" . $tempObj->name);
                $projectGallery->save();
            }
        }

     if ($request->validated("phase")){
         foreach ($request->validated("phase") as $phase) {
             $phaseObj = new ProjectPhase($phase);
             unset($phaseObj["document"], $phaseObj["agreement"]);
             $phaseObj->project()->associate($projectObj);
             $phaseObj->save();

             foreach ($phase["documents"] as $document) {
                 $documentObj=new ProjectDocument($document);
                 $documentObj->phase()->associate($phaseObj);
                 $documentObj->file_name="test";
                 $documentObj->file_size=2000;
                 $documentObj->file_type="test";
                 $documentObj->save();
             }

             foreach ($phase["agreements"] as $agreement) {
                 $agreementObj = new Agreement($agreement);
                 $agreementObj->phase()->associate($phaseObj);
                 $agreementObj->link = "agreement.pdf";
                 $agreementObj->text = ";orem sfasdczxckzjxvcjcvlkjcxvlkjcxvjklcjgvcxvkjxzcnzxkczbxckxzjcxhzjc";
                 $agreementObj->save();
             }
         }
     }
        return true;
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {

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
    public function destroy(string $id)
    {
        //
    }
}
