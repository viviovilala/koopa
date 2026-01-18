<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'order_id',
        'invoice_number',
        'amount',
        'currency',
        'status',
        'issued_at',
        'due_at',
    ];

    protected $casts = [
        'issued_at' => 'datetime',
        'due_at' => 'datetime',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
