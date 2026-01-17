<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceLadder extends Model
{
    protected $fillable = [
        'product_id',
        'min_qty',
        'price_per_unit',
        'currency',
        'sort_order',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
