<?php

namespace App\Vote;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $fillable = [
        'isAccepted'
    ];

    public function application()
    {
        return $this->hasOne('App/Entities/Applications');
    }


    public function user()
    {
        return $this->hasOne('App/Entities/User');
    }
}
