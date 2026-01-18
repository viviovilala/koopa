<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DropPoint extends Model
{
    protected $fillable = [
        'name',
        'address',
        'city',
        'window_start',
        'window_end',
        'capacity',
        'status',
    ];

    public function groups()
    {
        return $this->hasMany(Group::class);
    }
}
