<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Enums\GenderStatusEnum;
use App\Events\RegistrationEvent;
use App\Events\ResetPasswordEvent;
use App\Events\VerificationEvent;
use App\Notifications\ResetPasswordNotification;
use App\Traits\Slugable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Laratrust\Contracts\LaratrustUser;
use Laratrust\Traits\HasRolesAndPermissions;
use Laravel\Fortify\Fortify;
use Laravel\Sanctum\HasApiTokens;



class User extends Authenticatable implements LaratrustUser, MustVerifyEmail
{
    use HasApiTokens, HasFactory ,Slugable, Notifiable, HasRolesAndPermissions, CanResetPassword ,HasUlids ;

    /**
     * Reset Password Notification
     *
     * @param $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        ResetPasswordEvent::dispatch($this, $token);
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'slug',
        'email',
        'email_verified_at',
        'password',
        'location',
        'about_me',
        'skill',
        "verification_code",
        "is_cooperational",
        "sex"
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'sex'   =>  GenderStatusEnum::class
    ];

//    /**
//     * @return void
//     */
//    protected static function boot(): void
//    {
//        parent::boot();
//        static::created(function ($model) {
//            RegistrationEvent::dispatch($model);
//        });
//    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sendEmailVerificationNotification() {
        VerificationEvent::dispatch($this);
    }

    /**
     * @return HasMany
     */
    public function activities(): HasMany
    {
        return $this->hasMany(Activity::class);
    }

    /**
     * @return BelongsToMany
     */
    public function agreements(): BelongsToMany
    {
        return $this->belongsToMany(Agreement::class, 'user_agreements')->withPivot('acceptance_1', 'acceptance_2', 'status');
    }

    /**
     * Get the images for this tour.
     */
    public function images(): MorphMany|Image|array
    {
        return $this->morphMany(Image::class, 'parentable');
    }

    /**
     * Get the header's Image of this tour.
     */
    public function profileImage(): Image|MorphOne|null
    {
        return $this->morphOne(Image::class, 'parentable')->where('image_type','=','profile',);
    }

    /**
     * @return BelongsToMany
     *
     */
    public function socialMedia(): BelongsToMany
    {
        return $this->belongsToMany(SocialMedia::class, 'user_social_media')->withTimestamps()->withPivot("address", "social_media_id","id");
    }

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }

    /**
     * @return HasMany
     */
    public function invoice()
    {
        return $this->hasMany(Invoice::class);
    }


    /**
     * @return HasMany
     */
    public function assignedUser()
    {
        return $this->hasMany(Communication::class, "assigned_agent_id");
    }

    public function userDocuments()
    {
        return $this->hasMany(UserDocuments::class);
    }

    public function userExperience()
    {
        return $this->hasMany(UserWorkExperience::class);
    }

    public function userEducations()
    {
        return $this->hasMany(UserEducation::class);
    }

    public function communication()
    {
        return $this->hasMany(Communication::class);
    }

    public function records()
    {
        return $this->hasMany(CommunicationRecord::class);
    }
}
