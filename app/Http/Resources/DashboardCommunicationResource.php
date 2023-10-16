<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DashboardCommunicationResource extends JsonResource
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
            "date"             =>   $this->created_at->diffForHumans(),
            "name"             =>   $this->assignBy->first_name." ".$this->assignBy->last_name,
            "id"               =>   $this->id
        ];
    }
}
