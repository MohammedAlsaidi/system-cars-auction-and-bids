<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplyAuction extends Model
{

    protected $fillable = ['auction_id','user_id','price'];

    public function auction()
    {
        return $this->belongsTo(Auction::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
