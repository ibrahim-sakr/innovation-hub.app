<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityClient extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'activity_client';

    protected $fillable = [
        'activity_id',
        'client_id',
        'is_emailed'
    ];

}
