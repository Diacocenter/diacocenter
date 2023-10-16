<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProviderSocialMediaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id"      => $this->pivot?->id,
            "title"   => $this->id,
            "address" => $this->pivot?->address,
            "icon"    => asset("/storage/social/" . $this->icon)
        ];
    }
}
