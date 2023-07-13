<?php

namespace App\Models;

use App\Models\User;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bill extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'type',
        'date_bill',
        'nominal'

    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
