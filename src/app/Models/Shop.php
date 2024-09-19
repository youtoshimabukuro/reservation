<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_img',
        'shop_name',
        'city_id',
        'genre_id',
        'shop_overview',
    ];

    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }

    public function genre()
    {
        return $this->belongsTo('App\Models\Genre');
    }
}
