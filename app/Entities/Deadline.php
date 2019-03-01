<?php
/**
 * Created by PhpStorm.
 * User: sofien
 * Date: 01/03/2019
 * Time: 13:01
 */

namespace App\Entities;


use Illuminate\Database\Eloquent\Model;

class Deadline extends Model
{
    protected $fillable = [
        'isReminded', 'deadline_dead', 'application_id', 'reminder_text', 'post_deadline'
    ];

    public function application()
    {
        return $this->belongsTo('App/Entities/Applications');
    }
}