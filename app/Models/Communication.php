<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Communication extends Model
{
    use HasFactory, HasUlids;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'communications';

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
        "user_id",
        "assigned_by",
        "title",
        "feedback",
        "status"
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Get the user that create this support ticket
     */
    public function user (): BelongsTo
    {
        return $this->belongsTo(User::class, "user_id");
    }
    /**
     * Get the user that create this support ticket
     */
    public function assignBy (): BelongsTo
    {
        return $this->belongsTo(User::class, "assigned_by");
    }

    /**
     * @return HasMany
     */
    public function records()
    {
        return $this->hasMany(CommunicationRecord::class, "communication_id", "id");
    }
}
