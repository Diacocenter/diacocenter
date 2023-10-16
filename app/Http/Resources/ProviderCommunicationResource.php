<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProviderCommunicationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        return [
            "title"            => $this->title,
            "assigned_picture" => asset("/storage/users/profile/" . $this->assignBy->profileImage->url),
            "assigned_fname"   => $this->assignBy->first_name,
            "communication_id" => $this->id,
            "assigned_lname"   => $this->assignBy->last_name,
            "assigned_role"    => $this->assignBy->role_is,
            "date"             => Carbon::create($this->assignBy->created_at)->diffForHumans(),
            "has_unread"       => $this->records()->where("is_read", "=", false)->count() > 0 ? true : false
        ];
    }
}
