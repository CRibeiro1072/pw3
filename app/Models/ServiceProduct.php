<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ServiceProduct extends Pivot
{
    use HasFactory;
    protected $table = 'service_product';
    protected $fillable = [
        'service_id',
        'product_id',
        'quantity',
        'value'
    ];
}
