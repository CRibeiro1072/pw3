<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullName',
        'address',
        'district',
        'state',
        'phone',
        'cellPhone',
        'email',
    ];

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
