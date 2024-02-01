<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estimate extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'amount',
        'expiration_date',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}