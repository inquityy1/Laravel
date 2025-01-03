<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    protected $table = 'categories';

    protected $fillable = [
        'id',
        'job_title',
        'created_at',
        'updated_at',
    ];

    public $timestamp = true;

}
