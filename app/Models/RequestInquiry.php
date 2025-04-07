<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestInquiry extends Model
{
    protected $fillable = [
        'full_name',
        'mobile',
        'email',
        'message',
        'add_by_id'
    ];
}
