<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    protected $fillable = [
        'user_id',
        'company',
        'job_title',
        'status',
        'applied_date',
        'notes',
    ];
}
