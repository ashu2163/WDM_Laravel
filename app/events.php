<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    public $timestamps = false;
    protected $fillable=['EventName','EventType','EventDescription','EventUrl','Date', 'UserID'];
}