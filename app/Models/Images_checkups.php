<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Images_checkups extends Model
{
    protected $table = 'images_checkups';

    protected $guarded = [];

    public function cars()
    {
        return $this->belongsTo(Car::class);
    }

    public function checkups()
    {
        return $this->belongsTo(Checkup::class);
    }
}
