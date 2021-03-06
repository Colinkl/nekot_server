<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventProfile extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'title',
        'event_id'
    ];
}
