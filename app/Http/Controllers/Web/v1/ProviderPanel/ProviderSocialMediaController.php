<?php

namespace App\Http\Controllers\Web\v1\ProviderPanel;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserSocialMediaRequest;
use App\Http\Requests\UpdateUserSocialMediaRequest;
use App\Http\Resources\ProviderSocialMediaResource;
use App\Models\SocialMedia;
use App\Models\UserSocialMedia;

class ProviderSocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            if (auth()->user()->socialMedia()->count() !== 0){
                return ProviderSocialMediaResource::collection(auth()->user()->socialMedia()->get());
            }else
                return ProviderSocialMediaResource::collection(SocialMedia::all());
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
    public function store(StoreUserSocialMediaRequest $request) {

        foreach ($request->social as $item) {
            $exists = UserSocialMedia::where([
                'user_id' => auth()->user()->id,
                'social_media_id' => $item['social_media_id']
            ])->exists();
            if (!$exists) {
                UserSocialMedia::create([
                    'user_id' => auth()->user()->id,
                    'social_media_id' => $item['social_media_id'],
                    'address' => $item['address']
                ]);
            }else{
                UserSocialMedia::where('social_media_id',"=", $item['social_media_id'])->where('user_id',"=" ,auth()->user()->id)->update([
                    'user_id' => auth()->user()->id,
                    'social_media_id' => $item['social_media_id'],
                    'address' => $item['address']
                ]);
            }
        }
        return response()->json([
            'message' => 'Records saved'
        ], 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(UserSocialMedia $userSocialMedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserSocialMedia $userSocialMedia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserSocialMediaRequest $request, UserSocialMedia $userSocialMedia)
    {
        $userSocialMedia = New UserSocialMedia($request->validated());
        $userSocialMedia->user()->associate(auth()->user());
        return $userSocialMedia->updateOrCreate();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserSocialMedia $userSocialMedia)
    {
        $userSocialMedia = UserSocialMedia::where("user_id", "=", auth()->user()->id)->where("social_media_id", "=", $userSocialMedia->id)->first();
        if($userSocialMedia) {
            return $userSocialMedia->deleteOrFail();
        }
        return \response()->json(["data", "This record is not available"], 404);
    }
}
