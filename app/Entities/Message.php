<?php

namespace App\Entities;

use App\Entities\User;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'id_sender', 'id_receiver', 'content_type', 'message', 'isReaded', 'isDelivered', 'file_path', 'isFile'
    ];

    public function sender()
    {
        return $this->belongsTo('App\Entities\User');
    }

    public function receiver()
    {
        return $this->belongsTo('App\Entities\User');
    }
}
