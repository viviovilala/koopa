<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'product_id',
        'leader_id',
        'drop_point_id',
        'title',
        'target_volume',
        'current_volume',
        'unit',
        'status',
        'cut_off_at',
        'price_locked_at',
        'currency',
    ];

    protected $casts = [
        'cut_off_at' => 'datetime',
        'price_locked_at' => 'datetime',
    ];

    public function dropPoint()
    {
        return $this->belongsTo(DropPoint::class);
    }

    public function leader()
    {
        return $this->belongsTo(User::class, 'leader_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function members()
    {
        return $this->hasMany(GroupMember::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
