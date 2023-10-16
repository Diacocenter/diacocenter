<?php

namespace App\Models;

use App\Enums\JobTypeEnum;
use App\Enums\WorkExperienceEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property numeric $user_id
 * @property string  $company_name
 * @property string  $location
 * @property string  $title
 * @property string  $description
 * @property string  $job_type
 * @property string  $from
 * @property string  $to
 * @property string  $status
 */
class UserWorkExperience extends Model
{
    use HasFactory;


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_work_experiences';

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
        'user_id',
        'company_name',
        'location',
        'description',
        'job_type',
        'title',
        'status',
        'from',
        'to'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'job_type'     => JobTypeEnum::class,
        'status'       => WorkExperienceEnum::class,
        'company_name' => "string",
        'location'     => "string",
        'description'  => "string",
        'from'         => "string",
        'to'           => "string",
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * @return void
     */
    public function user()
    {
        $this->belongsTo(User::class);
    }
}
