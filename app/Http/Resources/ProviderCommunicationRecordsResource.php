<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProviderCommunicationRecordsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        if ($this->assignBy->id === auth()->user()->id) {
            $role = $this->user->roles()->pluck('name')->first();
            return [
                "name"             => $this->user->name,
                "role"             => $role,
                "communication_id" => $this->id,
                "id"               => $this->user->id,
                "image"            => asset("/storage/users/profile/" . $this->user->profileImage->url),
                "data"             => MessageResource::collection($this->records)
            ];
        }else{
            $role = $this->assignBy->roles()->pluck('name')->first();
            return [
                "name"             => $this->assignBy->name,
                "role"             => $role,
                "communication_id" => $this->id,
                "id"               => $this->assignBy->id,
                "image"            => asset("/storage/users/profile/" . $this->assignBy->profileImage->url),
                "data"             => MessageResource::collection($this->records)
            ];
        }
    }
}
