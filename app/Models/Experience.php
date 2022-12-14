<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = 'experiences';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = [
        'title',
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
