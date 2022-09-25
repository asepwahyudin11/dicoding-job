<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobSkillRequirement extends Model
{
    protected $table = 'job_skill_requirements';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = [
        'job_id',
        'skill_id',
    ];

    /**
     * Relation to job.
     * 
     * @return BelongsTo
     */
    public function job()
    {
        return $this->belongsTo(\App\Models\Job::class, 'job_id', 'id');
    }

}
