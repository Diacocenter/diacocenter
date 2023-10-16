<?php

namespace App\Observers;

use App\Models\Project;
use App\Models\ProjectPhase;

class ProjectPhaseObserver
{
    /**
     * Handle the ProjectPhase "created" event.
     */
    public function created(ProjectPhase $projectPhase): void
    {
        //
    }
    /**
     * Handle the Project "created" event.
     */
    public function creating(ProjectPhase $projectPhase): void
    {
        $projectPhase->slug = $projectPhase::makeSlug($projectPhase->title);
    }

    /**
     * Handle the ProjectPhase "updated" event.
     */
    public function updated(ProjectPhase $projectPhase): void
    {
        //
    }

    /**
     * Handle the ProjectPhase "deleted" event.
     */
    public function deleted(ProjectPhase $projectPhase): void
    {
        //
    }

    /**
     * Handle the ProjectPhase "restored" event.
     */
    public function restored(ProjectPhase $projectPhase): void
    {
        //
    }

    /**
     * Handle the ProjectPhase "force deleted" event.
     */
    public function forceDeleted(ProjectPhase $projectPhase): void
    {
        //
    }
}
