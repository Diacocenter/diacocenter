<?php

namespace App\Observers;

use App\Enums\WorkExperienceEnum;
use App\Models\UserWorkExperience;
use Carbon\Carbon;

class UserWorkExperienceObserver
{
    /**
     * Handle the Product "creating" event.
     *
     * @param UserWorkExperience $userWorkExperience
     *
     * @return void
     */
    public function creating(UserWorkExperience $userWorkExperience): void
    {
        if(empty(trim($userWorkExperience->to)) || $userWorkExperience->to > Carbon::now()->year) {
            $userWorkExperience->status = WorkExperienceEnum::working;
            $userWorkExperience->to = null;
        } else {
            $userWorkExperience->status = WorkExperienceEnum::completed;
        }
    }
    /**
     * Handle the UserWorkExperience "created" event.
     */
    public function created(UserWorkExperience $userWorkExperience): void
    {
        //
    }

    /**
     * Handle the UserWorkExperience "updated" event.
     */
    public function updated(UserWorkExperience $userWorkExperience): void
    {
        if(empty(trim($userWorkExperience->to)) || $userWorkExperience->to > Carbon::now()->year) {
            $userWorkExperience->status = WorkExperienceEnum::working;
            $userWorkExperience->to = null;
        } else {
            $userWorkExperience->status = WorkExperienceEnum::completed;
        }

    }

    /**
     * Handle the UserWorkExperience "deleted" event.
     */
    public function deleted(UserWorkExperience $userWorkExperience): void
    {
        //
    }

    /**
     * Handle the UserWorkExperience "restored" event.
     */
    public function restored(UserWorkExperience $userWorkExperience): void
    {
        //
    }

    /**
     * Handle the UserWorkExperience "force deleted" event.
     */
    public function forceDeleted(UserWorkExperience $userWorkExperience): void
    {
        //
    }
}
