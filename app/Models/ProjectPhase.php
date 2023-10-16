<?php

namespace App\Models;

use App\Enums\ProjectStatusEnum;
use App\Traits\Slugable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectPhase extends Model
{
    use HasFactory,Slugable;


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'project_phases';

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
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'project_id',
        'title',
        'description',
        'skills',
        'start_tender_date',
        'end_tender_date',
        'start_date',
        'end_date',
        'prerequisite',
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
        'skills' => "array",
        'prerequisite'  => "array"
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function project(){
        return $this->belongsTo(Project::class);
    }

    public function documents(){
        return $this->hasMany(ProjectDocument::class,"project_phase_id");
    }

    public function agreements(){
        return $this->hasMany(Agreement::class);
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
