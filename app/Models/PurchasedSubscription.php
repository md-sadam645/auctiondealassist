<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchasedSubscription extends Model
{
    protected $fillable = [
        'current_plan',
        'plan_price',
        'duration',
        'purchased_date',
        'expiry_date',
        'buyer_name',
        'buyer_email',
        'buyer_mobile',
        'payment_id',
        'payment_status',
        'payment_request_id',
        'status',
        'user_id'
    ];
}
