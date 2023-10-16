<?php

namespace App\Providers;

use App\Events\ChangePasswordEvent;
use App\Events\ContactUsEvent;
use App\Events\MemberShipEvent;
use App\Events\RegistrationEvent;
use App\Events\ResetPasswordEvent;
use App\Events\VerificationEvent;
use App\Listeners\ChangePasswordListener;
use App\Listeners\ContactUsEmailListener;
use App\Listeners\ContactUsSMSListener;
use App\Listeners\MemberShipListener;
use App\Listeners\RegistrationListener;
use App\Listeners\ResetPasswordListener;
use App\Listeners\VerifyListener;
use App\Models\CommunicationRecord;
use App\Models\ContactUs;
use App\Models\Project;
use App\Models\ProjectPhase;
use App\Models\User;
use App\Models\UserWorkExperience;
use App\Notifications\ResetPasswordNotification;
use App\Observers\ContactUsObserve;
use App\Observers\ProjectObserver;
use App\Observers\ProjectPhaseObserver;
use App\Observers\UserCommunicationObserver;
use App\Observers\UserObserver;
use App\Observers\UserWorkExperienceObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class     => [
            SendEmailVerificationNotification::class,
        ],
        ContactUsEvent::class => [
            ContactUsEmailListener::class,
//            ContactUsSMSListener::class
        ],
        RegistrationEvent::class =>[
            RegistrationListener::class,
        ],
        VerificationEvent::class=>[
            VerifyListener::class
        ],
        MemberShipEvent::class=>[
            MemberShipListener::class
        ],

        ResetPasswordEvent::class=> [
            ResetPasswordListener::class,
        ],
        ChangePasswordEvent::class=>[
            ChangePasswordListener::class
        ]
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        ContactUs::observe(ContactUsObserve::class);
        UserWorkExperience::observe(UserWorkExperienceObserver::class);
        User::observe(UserObserver::class);
        CommunicationRecord::observe(UserCommunicationObserver::class);
        Project::observe(ProjectObserver::class);
        ProjectPhase::observe(ProjectPhaseObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
