<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Nette\SmartObject;

class Reservation extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['user_id', 'shop_id', 'date', 'time_id', 'number_id'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function shop()
    {
        return $this->belongsTo('App\Models\Shop');
    }

    public function time()
    {
        return $this->belongsTo('App\Models\Time');
    }

    public function number()
    {
        return $this->belongsTo('App\Models\Number');
    }
}
