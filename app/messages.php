<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class messages extends Model
{
    public $timestamps = false;
    protected $fillable=['EmailID', 'Message', 'status'];
}
