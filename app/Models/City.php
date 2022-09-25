<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = [
        'name',
    ];

    /**
     * Relation to job.
     *
     * @return HasMany
     */
    public function job()
    {
        return $this->hasMany(Job::class, 'city_id', 'id');
    }
}
