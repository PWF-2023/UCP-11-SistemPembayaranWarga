<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'date_transaction',
        'desc',
        'is_success'
    ];

    public function bill()
    {
        return $this->hasMany(Bill::class);
    }
}
