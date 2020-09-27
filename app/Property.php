<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'price','num_bedroom', 'num_bathroom', 'status', 'image'
    ];

    /**
     * Scope a query to only include enabled properties.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeEnabled($query)
    {
        return $query->where(config('constants.PROPERTIES.FIELDS.STATUS'), 1);
    }
}
