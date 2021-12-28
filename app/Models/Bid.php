<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;

    protected $fillable=[
        'opening_date',
        'closing_date',
        'source_id',
        'bid_document_price',
        'region_id',
        'language_id',
        'title',
        'detail',
        'category_id',
        'status'
    ];

}
