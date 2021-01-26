<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    use HasFactory;
    protected $fillable = [
        'function',
        'fullName',
        'phone',
        'cellPhone',
        'email',
        'percent',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'expert_id', 'id');
    }
}
