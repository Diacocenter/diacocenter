<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProviderEducationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id"         => $this->id,
            "title"      => $this->title,
            "university" => $this->university,
            "degree"     => $this->degree,
            "location"   => $this->location,
            "from"       => $this->from,
            "to"         => $this->to ?: 'Until Now',
            "status"     => $this->status
        ];
    }
}
