<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = [
        'title',
        'description',
        'company_name',
        'company_logo',
        'company_size',
        'type_id',
        'city_id',
        'experience_id',
        'created_by',
        'created_email',
        'closed_at'
    ];
}
