<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Applications extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pan_number', 'compagny_number', 'innovation_field', 'innovation_description', 'innovation_sector', 'startup_description', 'invested_funds'
        ,'expediture_product', 'expediture_sales', 'user_expectation', 'inspiration', 'tech_innovation', 'isStarted'
    ];

    public function user()
    {
        return $this->belongsTo('App\Entities\User');
    }

}
