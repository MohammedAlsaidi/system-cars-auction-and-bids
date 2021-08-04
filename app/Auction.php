<?php

namespace App;

use App\Models\Car;
use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    protected $fillable=['car_id','start','end'];


    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function apply_auctions()
    {
        return $this->hasMany(ApplyAuction::class);
    }
}
