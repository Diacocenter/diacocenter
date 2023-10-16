<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class CommunicationRecord extends Model
{
    use HasFactory,HasUlids;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'communication_records';

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
        "communication_id",
        "user_id",
        "message",
        "seen",
        "is_read"
    ];

    /**
     *
     * @return array
     */
    protected $casts = [
        "seen"       => "datetime",
        "created_at" => "datetime",
        "updated_at" => "datetime",
        "is_read"    => "boolean"
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    /**
     * Get the ticket that owns this record
     */
    public function communication(): BelongsTo
    {
        return $this->belongsTo(Communication::class);
    }

    /**
     * Get the ticket that owns this record
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the images for this community.
     */
    public function images(): MorphMany|Image|array
    {
        return $this->morphMany(Image::class, 'parentable');
    }

}
