<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Situation extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
    ];

    public function services(){
        return $this->belongsToMany(Service::class);
    }
}
