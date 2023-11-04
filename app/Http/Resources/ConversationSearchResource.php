<?php

namespace App\Http\Resources;

use App\Enums\GenderStatusEnum;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ConversationSearchResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        if ($this->profileImage()->first()) {
            $profileImage = $this->profileImage()->first()->url;
        } else {
            $profileImage = match ($this->sex?->value) {
                GenderStatusEnum::male => "default.png",
                GenderStatusEnum::female => "default.png",
                default => "male.png",
            };
        }
        $role = $this->roles()->pluck('name')->first();
        return [
            'value'         =>  $this->id,
            'label'   =>  $this->name,
            'role'          =>  $role,
            'id'            =>  $this->id,
            'profile'       =>  $this->profileImage ? asset("/storage/users/profile/" . $profileImage) : "",
            'isFixed'       =>  "true",
        ];
    }
}
