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
        return [
            "name"      =>  $this->assignBy->first_name ." ".$this->assignBy->last_name,
            "role"      =>  $this->assignBy,
            "image"     =>  asset("/storage/users/profile/" . $this->assignBy->profileImage->url),
            "data"      =>  MessageResource::collection($this->records)
        ];
    }
}
