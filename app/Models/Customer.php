<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullName',
        'phone',
        'cellPhone',
        'email',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'customer_id', 'id');
    }
}
