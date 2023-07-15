<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusBill extends Model
{
    use HasFactory;

    protected $table = 'status_bills';

    protected $fillable = [
        'user_id',
        'bill_id',
        'is_pay',
        'is_late'

    ];
}
