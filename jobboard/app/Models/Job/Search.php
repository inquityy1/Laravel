<?php

namespace App\Models\Job;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
{

    protected $table = 'searches';

    protected $fillable = [
        'id',
        'keyword',
    ];

    public $timestamp = true;
}
