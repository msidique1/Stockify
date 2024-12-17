<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductAttribute extends Model
{
    use HasFactory;

    protected $table = 'product_attributes';

    protected $fillable = [
        'product_id',
        'name',
        'value',
    ];

    public function products(): BelongsTo {
        return $this->belongsTo(Products::class, 'product_id');
    }
}
