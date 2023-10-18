<?php

namespace App\Models;

use App\Enums\ProjectStatusEnum;
use App\Enums\UserEducationStatusEnum;
use App\Traits\Slugable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Project extends Model
{
    use HasFactory, Slugable;


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'projects';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'title',
        'language_id',
        'start_date',
        'end_date',
        'description',
        'label',
        'company_name',
        'price',
        'status'
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     *
     * @return array
     */
    protected $casts = [
        'status'     => ProjectStatusEnum::class,
        'label'      => "array",
        'start_date' => "datetime",
        'end_date'   => "datetime",

    ];


    public function getLabelAttribute($value)
    {
        return ucfirst($value, true);
    }

    // Define a setter for the 'label' attribute
    public function setLabelAttribute($value)
    {
        $lowercaseArray = array_map('strtolower', $value);
        $this->attributes['label'] = json_encode($lowercaseArray);
    }

    /**
     * Get the images for this tour.
     */
    public function images(): MorphMany|Image|array
    {
        return $this->morphMany(Image::class, 'parental');
    }

    /**
     * Get the header's Image of this tour.
     */
    public function headerImage(): Image|MorphOne|null
    {
        return $this->morphOne(Image::class, 'parentable')->where('image_type', '=', 'header',);
    }

//    /**
//     * Get the header's Image of this tour.
//     */
//    public function headerImage(): Image|MorphOne|null
//    {
//        return $this->morphOne(Image::class, 'parentable')->where('image_type','=','header',);
//    }

    /**
     * Get the gallery for this tour.
     */
    public function gallery(): HasMany
    {
        return $this->hasMany(ProjectGallery::class);
    }

    /**
     * @return HasMany
     */
    public function termAndConditions(): HasMany
    {
        return $this->hasMany(TermAndConditions::class);
    }

//    /**
//     * @return HasMany
//     */
//    public function projectDocuments(): HasMany
//    {
//        return $this->hasMany(ProjectDocument::class);
//    }

    public function phases()
    {
        return $this->hasMany(ProjectPhase::class);
    }

    /**
     * @return HasMany
     */
    public function projectRequirements(): HasMany
    {
        return $this->hasMany(ProjectRequirement::class);
    }

    /**
     * @return HasMany
     */
    public function projectExclude(): HasMany
    {
        return $this->hasMany(ProjectExclude::class);
    }


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
