<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Article extends Model
{
    use HasFactory, Sluggable;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'articles';

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
        'title',
        'slug',
        'body',
        'user_id',
        'short_description'
    ];

    /**
     *
     * @return array
     */
    protected $casts = [
        "created_at"             => "datetime",
        "updated_at"             => "datetime",
    ];

    /**
     * @return BelongsTo
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source'    => ['title'],
                'updatable' => true
            ]
        ];
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
    public function headerImage(): Image|MorphOne|null
    {
        return $this->morphOne(Image::class, 'parentable')->where('image_type','=','header',);
    }

    /**
     * Get the thumbnail's Image of this tour.
     */
    public function thumbnailImage(): Image|MorphOne|null
    {
        return $this->morphOne(Image::class, 'parentable')->where('image_type','=','thumbnail',);
    }
}
