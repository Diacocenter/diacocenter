<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UnreadResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "profile_image"    =>   asset("/storage/users/profile/" . $this->assignBy->profileImage->url),
            "title"            =>   $this->title,
            "name"             =>   $this->assignBy->first_name." ".$this->assignBy->last_name,
            "date"             =>   $this->created_at->diffForHumans(),
            "id"               =>   $this->id
        ];
    }
}
