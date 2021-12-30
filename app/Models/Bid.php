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

    public function users(){
        return $this->belongsToMany(User::class, 'user_bids');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function language(){
        return $this->belongsTo(Language::class, 'language_id');
    }

    public function region(){
        return $this->belongsTo(Region::class, 'region_id');
    }

}
