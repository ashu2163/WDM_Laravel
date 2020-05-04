<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class videos extends Model
{
    public $timestamps = false;
    protected $fillable=['UserID','VideoType','VideoDescription','VideoUrl','Date'];
}
