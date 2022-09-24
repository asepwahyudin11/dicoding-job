<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $table = 'candidates';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = [
        'job_id',
        'name',
        'email',
        'phone_number',
        'cover_letter',
        'link_cv',
        'link_portofolio',
        'link_another',
        'skills',
        'uploaded_at'
    ];
}
