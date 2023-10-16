<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait Slugable
{
    /**
     * Create a conversation slug.
     *
     * @param  string $value
     * @return string
     */
    protected function makeSlug($value)
    {
        $slug = preg_replace('/[^A-Za-z0-9\p{L}\-]/u', '-', strtolower(trim($value)));
        $count = static::where("slug",  "LIKE",  $slug)->count();
        return $count ? "{$slug}-{$count}" : $slug;
    }
}
