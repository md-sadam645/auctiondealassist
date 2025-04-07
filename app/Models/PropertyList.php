<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyList extends Model
{
    protected $fillable = [
        "bank_name",
        "branch_name_and_address",
        "borrower_name",
        "property_type",
        "property_details",
        "area",
        "possession",
        "locality",
        "city",
        "state",
        "reserve_price",
        "emd_amount",
        "bid_increment",
        "inspection_date",
        "emd_submission",
        "auction_start",
        "auction_end",
        "authorized_officer",
        "auction_portal",
        "status",
        "add_by",
        "sale_notice"
    ];
}
