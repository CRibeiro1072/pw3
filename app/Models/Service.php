<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'situation_id',
        'customer_id',
        'expert_id',
        'device_id',
        'brand_id',
        'template_id',
        'serial',
        'claimedDefect',
        'technicalReport',
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

    public function situation()
    {
        return $this->belongsTo(Situation::class);
    }

    public function device()
    {
        return $this->belongsTo(Device::class);
    }

    public function template()
    {
        return $this->belongsTo(Template::class);
    }
}
