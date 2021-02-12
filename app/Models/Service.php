<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'expert_id',
        'device_id',
        'brand_id',
        'template_id',
        'serial',
        'claimedDefect',
        'technicalReport',
        'servicePrice',
        'dateTechnicalReport'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function expert()
    {
        return $this->belongsTo(Expert::class);
    }

    public function device()
    {
        return $this->belongsTo(Device::class);
    }

    public function template()
    {
        return $this->belongsTo(Template::class);
    }

    public function products(){
        return $this->belongsToMany(Product::class, 'service_product')->using(ServiceProduct::class)->withPivot('quantity', 'value')->withTimestamps();
    }

    public function situations(){
        return $this->belongsToMany(Situation::class, 'service_situation')->using(ServiceSituation::class)->withTimestamps();
    }
}
