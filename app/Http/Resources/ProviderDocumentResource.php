<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProviderDocumentResource extends JsonResource
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
            "type"       => $this->type,
            "status"     => $this->status,
            "created_at" => Carbon::parse($this->created_at)->format('Y/m/d')
        ];
    }
}
