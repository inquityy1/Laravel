<?php

namespace App\Models\Job;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table = 'applications';

    protected $fillable = [
        'id',
        'cv',
        'user_id',
        'job_image',
        'job_title',
        'job_region',
        'company',
        'job_type',
        'job_id'
    ];

    public $timestamp = true;
}
