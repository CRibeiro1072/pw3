<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'brand',
        'quantity',
        'priceCost',
        'salePrice',
    ];

    public function itemServices()
    {
        return $this->hasMany(ItemService::class);
    }
}
