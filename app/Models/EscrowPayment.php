<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EscrowPayment extends Model
{
    protected $fillable = [
        'order_id',
        'amount',
        'currency',
        'status',
        'paid_at',
        'released_at',
    ];

    protected $casts = [
        'paid_at' => 'datetime',
        'released_at' => 'datetime',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
