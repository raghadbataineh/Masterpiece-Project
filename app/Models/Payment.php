<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'payment_method', 'payment_amount', 'payment_status',
        'payment_date', 'payment_gateway_response', 'transaction_id',
        'billing_information', 'currency', 'payment_description',
        'payment_type', 'refund_status', 'refund_amount'
    ];

    protected $casts = [
        'payment_date' => 'datetime',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
