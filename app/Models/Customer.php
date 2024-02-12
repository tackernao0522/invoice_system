<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'kana',
        'email',
        'phone',
        'address',
    ];

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function estimates()
    {
        return $this->hasMany(Estimate::class);
    }

    public function scopeSearchCustomers($query, $input = null)
    {
        if (!empty($input)) {
            return $query->where('kana', 'like', $input . '%')
                ->orWhere('phone', 'like', $input . '%')
                ->orWhere('name', 'like', $input . '%');
        }
    }
}
