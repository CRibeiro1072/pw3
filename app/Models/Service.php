<?php

namespace App\Models;
//namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use App\Models\Customer;
////use App\Models\Gadget;
////use App\Models\Expert;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
        'customer_id',
        'gadget_id',
        'expert_id',
        'claimedDefect',
        'technicalReport',
        'dateTechnicalReport'
    ];

    public function customer()
    {
         return $this->hasOne(Customer::class, 'id', 'customer_id');
     }

    public function gadget()
    {
       return $this->hasOne(Gadget::class, 'id', 'gadget_id');
     }

    public function expert()
    {
        return $this->hasOne(Expert::class, 'id', 'expert_id');
     }
}
