<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'group_id',
        'member_id',
        'total_qty',
        'unit',
        'total_amount',
        'currency',
        'status',
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function member()
    {
        return $this->belongsTo(User::class, 'member_id');
    }

    public function escrowPayment()
    {
        return $this->hasOne(EscrowPayment::class);
    }

    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }
}
