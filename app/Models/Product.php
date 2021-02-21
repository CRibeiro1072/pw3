<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'brand_id',
        'quantity',
        'priceCost',
        'salePrice',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function services()
    {
        return $this->belongsToMany(Service::class, 'service_product')->using(ServiceProduct::class);
    }
}
