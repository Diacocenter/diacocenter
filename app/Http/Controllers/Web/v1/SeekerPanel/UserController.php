<?php

namespace App\Http\Controllers\Web\v1\SeekerPanel;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSlugCheckRequest;
use App\Http\Requests\UpdateUserPersonalInformationRequest;
use App\Http\Resources\ProviderActivitiesResource;
use App\Http\Resources\ProviderContactInfoDetailsResource;
use App\Http\Resources\SeekerContactInfoDetailsResource;
use App\Models\Image;
use App\Models\TemporaryFile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new SeekerContactInfoDetailsResource(auth()->user());
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
    public function update(UpdateUserPersonalInformationRequest $request)
    {
        auth()->user()->update($request->validated());
        $tempObj = TemporaryFile::find($request->validated("file"));
        if($tempObj) {
            $moved = Storage::disk('public')->move("tmp-files/" . $tempObj->name, "/users/profile/" . $tempObj->name);
            if($moved) {
                $tempObj->delete();
                $imageObj = Image::updateOrCreate([
                    'parentable_id'     =>  auth()->user()->id,
                    'parentable_type'   =>  User::class
                ],
                    [
                        "url"   =>  $tempObj->name,
                        "image_type"   =>  "profile",
                        "alt"   =>  auth()->user()->name . " - " . config("name")
                    ]);
                auth()->user()->images()->save($imageObj);
            }
        }
        return \response()->json(200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getSlug(StoreSlugCheckRequest $request)
    {
        if (auth()->user()->slug == $request->slug)
        {
            return true;
        }else{
            if (User::where('slug','=',$request->slug)->exists())
            {
                return abort("404" , "this slug is exist");
            } else{
                return true;
            }
        }
    }
}
