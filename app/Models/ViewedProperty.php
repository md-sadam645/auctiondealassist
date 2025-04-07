<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewedProperty extends Model
{
    protected $fillable = [
        'property_id',
        'bank_name',
        'property_type',
        'viewed_date',
        'user_id'
    ];
}
