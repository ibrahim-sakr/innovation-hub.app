<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;

    protected $table = 'competitions';

    public function categories()
    {
        return $this->hasMany(Category::class, 'competition_id', 'id');
    }
}
