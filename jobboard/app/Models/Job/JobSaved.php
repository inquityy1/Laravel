<?php

namespace App\Models\Job;

use Illuminate\Database\Eloquent\Model;

class JobSaved extends Model
{

    protected $table = 'jobsaved';

    protected $fillable = [
        'id',
        'job_id',
        'user_id',
        'job_image',
        'job_title',
        'job_region',
        'company',
        'job_type',
    ];

    public $timestamp = true;
}