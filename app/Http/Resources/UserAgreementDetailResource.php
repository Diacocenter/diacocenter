<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserAgreementDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
        return [
            "title"        => $this->title,
            "link"         => $this->link,
            "text"         => $this->text,
            "acceptance_1" => $this->pivot->acceptance_1,
            "acceptance_2" => $this->pivot->acceptance_2,
            "status"       => ucfirst($this->pivot->status)
        ];
    }
}
