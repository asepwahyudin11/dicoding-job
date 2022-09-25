<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'types';
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
        return $this->hasMany(Job::class, 'type_id', 'id');
    }

}
