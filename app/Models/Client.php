<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';

    protected $fillable = [
        'name',
        'email',
        'phone'
    ];

    public function xxx()
    {
        return $this->belongsToMany(
            PaymentProvider::class,
            'users_payments_providers',
            'user_id',
            'payment_id'
        );
    }
}
