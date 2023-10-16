<?php

namespace App\Models;

use App\Events\ContactUsEvent;
use App\Events\RegistrationEvent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'contact_us';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "first_name",
        "last_name",
        "email",
        "phone_number",
        "message"
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
    protected static function boot(): void
    {
        parent::boot();
        static::created(function ($model) {
            ContactUsEvent::dispatch($model);
        });
    }
}
