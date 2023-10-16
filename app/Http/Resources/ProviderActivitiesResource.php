<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProviderActivitiesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'ip'         => $this->ip,
            'country'    => $this->country,
            'os'         => $this->os,
            "created_at" => Carbon::parse($this->created_at)->format('Y/m/d')

        ];
    }
}
