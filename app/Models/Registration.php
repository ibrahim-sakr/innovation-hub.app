<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    const TYPE_SCHEDULE = 'schedule';
    const TYPE_COURSE = 'course';
    const TYPE_CATEGORY = 'category';
    const TYPE_ACTIVITY = 'activity';
    const TYPE_FEEDBACK = 'feedback';
    const TYPE_HIRING = 'hiring';

    protected $table = 'registrations';

    protected $fillable = [
        'model_type',
        'details',
        'model_id',
        'is_emailed'
    ];

    protected $casts = [
        'details' => 'json'
    ];
}
