<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JoinUs extends Model
{
    protected $fillable = [
        "full_name",
        "city",
        "state",
        "contact",
        "email",
        "message"
    ];
}
