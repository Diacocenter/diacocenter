<?php

namespace App\Http\Resources;

use App\Enums\GenderStatusEnum;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SeekerContactInfoDetailsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        if ($this->profileImage()->first()) {
            $profileImage = $this->profileImage()->first()->url . ".png";
        } else {
            $profileImage = match ($this->sex?->value) {
                GenderStatusEnum::male => "male.png",
                GenderStatusEnum::female => "female.png",
                default => "male.png",
            };
        }
        return [
            "fname"           => $this->first_name,
            "lname"           => $this->last_name,
            "profile_picture" => asset("/storage/users/profile/" . $profileImage),
            'slug'            => $this->slug,
            'email'           => $this->email,
            'sex'             => $this->sex,
            'about_me'        => $this->about_me,
            'skills'          => $this->skills
        ];
    }
}
