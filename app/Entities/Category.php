<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];

    public function user()
    {
        return $this->belongsTo('App\Entities\User');
    }

    public function application()
    {
        return $this->belongsToMany('App\Entities\Applications');
    }
}
