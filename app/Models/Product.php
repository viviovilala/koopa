<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'supplier_id',
        'name',
        'sku',
        'image_url',
        'category',
        'moq',
        'unit',
        'service_area',
        'status',
        'currency',
    ];

    protected $casts = [
        'service_area' => 'array',
    ];

    public function priceLadders()
    {
        return $this->hasMany(PriceLadder::class)->orderBy('sort_order');
    }
}
