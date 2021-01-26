<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gadget extends Model
{
    use HasFactory;
    protected $fillable = [
        'equipment',
        'brand',
        'model',
        'serial',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'gadget_id', 'id');
    }
}
