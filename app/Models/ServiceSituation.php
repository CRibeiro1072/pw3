<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ServiceSituation extends Pivot
{
    use HasFactory;
    protected $table = 'service_situation';
    protected $fillable = [
        'service_id',
        'situation_id'
    ];
}
