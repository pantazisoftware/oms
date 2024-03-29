<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $casts = [
        'pickup_date' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    protected $fillable = [
        'name',
        'phone',
        'weight',
        'details',
        'pickup_date',
        'advance_payment_amount',
        'rest_payment_amount',
        'notes',
    ];

    public function note()
    {
        return $this->hasMany(Note::class, 'order_id');
    }
}
